<?php
/*
 * 画像縮小
 */
class momoImage
{
	public static function getThumbnailUrl()
	{
		return XOOPS_URL.'/images/thumbnail';
	}
    /* momoImageからの呼び出しに応える */
    static public function imageEditFromText($text, $width, $height, $kind)
    {
        // 渡されたテキストに入っている最初の画像を取り出して指定サイズと指定種類に加工して返す
        $firstImage = self::getFirstImage($text);
        return self::returnThumbnail($firstImage,$imageName,$size,$size,'square');
    }
	
	/* テキストから最初のimgを切り出す */
	static public function getFirstImage($text)
	{
        $imageFile = '';
        preg_match_all("/\<img ([^\>]+)\>/i",$text,$match);
        if (count($match[1]) > 0) {
            $cnt = 0;
            foreach ($match[1] as $val) {
                preg_match("/src\=\"([^\"]+)\"/i",$val,$match2);
                $imageFile = $match2[1];
                break;
            }
        }
        return $imageFile;
	}
	
	// 正方形サムネイル作成
	// 　正方形サムネイルの定義　結果を必ず正方形で返す
	// 　そのため、高さと幅が異なったときは短い辺を100％として縮小、長い辺は同じ縮小率で縮めてから
	// 　指定された長さに切り取る
	static public function createThumbnail($fileUrl, $outFileName, $sizeWidth, $sizeHeight, $kind)
	{
		if (strpos($fileUrl ,XOOPS_URL) === false){
			// ファイルのURLが自サイトでないときはURLをそのまま使う
			$filePath = $fileUrl;
		} else {
			// ファイルのURLが自サイトの時はURLをpathに置き換える
			$filePath = str_replace(XOOPS_URL,XOOPS_ROOT_PATH,$fileUrl);
		}
		// 画像の種類判定
		$fileArray = explode('.',$filePath); 
		$count = count($fileArray);
		$type = '';
		if($count > 0){
			$type = $fileArray[$count - 1];
		}

        if($outFileName != ''){
            // 保存する際の名前を作成
            $thumbnailImagename =  $outFileName.'.png';
            $imagename = self::getThumbnailPath().'/'.$thumbnailImagename;
        } else {
            $thumbnailImagename =  '';
            $imagename = '';
        }

        switch($type){
			case 'png':
				$image = ImageCreateFromPNG($filePath);
				break;
			case 'jpg':
			case 'jpeg':
				$image = ImageCreateFromJPEG($filePath);
				break;
			case 'gif':
				$image = ImageCreateFromGIF($filePath);
				break;
			default:
				return self::getThumbnailNoImage($thumbnailImagename, $sizeWidth, $sizeHeight, $kind);
		}

		// 画像のサイズを取得。
		$width = ImageSX($image); //横幅（ピクセル）
		$height = ImageSY($image); //縦幅（ピクセル）

		switch ($kind){
			case 'square':
				// 正方形
				if($width > $height){
					// 横幅の方が大きいとき
					$newHeight = $sizeWidth;
					$rate = $newHeight / $height; //圧縮比
					$newWidth = $rate * $width;
				} else {
					// 縦の方が大きいとき
					$newWidth = $sizeHeight;
					$rate = $newWidth / $width; //圧縮比
					$newHeight = $rate * $height;
				}
				break;
			case 'max':
				// max width,max height内に納める
				// widthとheightの指定サイズに対する比率を計算する
				$widthRatio = $sizeWidth / $width;
				$heightRatio = $sizeHeight / $height;
				
				if (($widthRatio >= 1) and ($heightRatio >= 1)){
					// 縦横共に指定サイズより小さいとき今の大きさで書き出す
					//return $fileUrl;
                    $widthRatio = 1;
                    $heightRatio = 1;
				}

				// 小さい方の比率で縮小する
				if($widthRatio < $heightRatio){
					$newWidth = $width * $widthRatio;
					$newHeight = $height * $widthRatio;
				} else {
					$newWidth = $width * $heightRatio;
					$newHeight = $height * $heightRatio;
				}

				break;
		}

		// 縮小
		$newImage = ImageCreateTrueColor($newWidth, $newHeight);

		// 背景を白くする
		imagealphablending($newImage, false);
		imageSaveAlpha($newImage, true);
		$fillcolor = imagecolorallocatealpha($newImage, 0, 0, 0, 127);
		imagefill($newImage, 0, 0, $fillcolor);

		ImageCopyResampled($newImage,$image,0,0,0,0,$newWidth,$newHeight,$width,$height);



		if ($kind == 'square'){
			// サムネイルのサイズの空画像を作成
			$thumbnail = ImageCreateTrueColor($sizeWidth, $sizeHeight);
			// サイズがはみ出している部分を省略して切り出す
			imagecopy($thumbnail,$newImage,0,0,0,0,$newWidth,$newHeight);
            if($imagename == ''){
                $returnImage = imagepng($thumbnail);
            } else {
                imagepng($thumbnail, $imagename);
            }
		} else {
			// 新しいサイズで画像書きだし
            if($imagename == ''){
                $returnImage =  imagepng($newImage);
            } else {
                imagepng($newImage, $imagename);
            }
		}
		// メモリを解放
		if(isset($image)){
			imagedestroy ($image);
		}
		if(isset($newImage)){
			imagedestroy ($newImage);
		}
		if(isset($thumbnail)){
			imagedestroy ($thumbnail);
		}
        if($imagename == ''){
                return $returnImage;
        } else {
		    return self::getThumbnailUrl().'/'.$thumbnailImagename;
        }
	}

    /* サムネールpathを返す */
    static public function getThumbnailFilePath($moduleName,$id,$prefix='')
    {
        return self::getThumbnailPath().'/'.self::getThumbnailFileName($moduleName,$id,$prefix);
    }

    /* サムネール名を返す */
    static public function getThumbnailFileName($moduleName,$id,$prefix='')
    {
        return $prefix.$moduleName.$id.'.png';
    }

    /* 新しいモジュール用サムネールがあるかどうかを判定する */
    static public function existNewThumbnail($thumbnailPath,$timestamp)
    {
        // サムネール用フォルダに $prefix+$moduleName+$id.png で保存されている
        if(file_exists($thumbnailPath)){
            if(filemtime($thumbnailPath) > $timestamp){
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

	/* サムネール取得 */
	static public function getSquareThumbnail($text,$imageName,$size)
	{
		$firstImage = self::getFirstImage($text);
		return self::createThumbnail($firstImage,$imageName,$size,$size,'square');
	}
	
	/* モジュール名取得 */
	static public function getModuleDirName()
	{
		$root =& XCube_Root::getSingleton();
        if(is_object($root->mContext->mModule)){
            if(is_object($root->mContext->mModule->mXoopsModule)){
                return $root->mContext->mModule->mXoopsModule->get('dirname');
            }
        }
		return false;
	}
    static public function getCurrentUrl()
    {
		if ( isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on' ) 
		{ 
		    $protocol = 'https://';
		} 
		else 
		{ 
		    $protocol = 'http://';
		} 
		 
		return $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	}
	

    /* 一般設定の値を取得 */
    static public function getConfigItem($name)
    {
        $root =& XCube_Root::getSingleton();
        return $root->mContext->mModuleConfig[$name];
    }
    
	public static function getThumbnailNoImage($outFileName, $sizeWidth, $sizeHeight, $kind)
	{
        $newImage = ImageCreateTrueColor($sizeWidth, $sizeHeight);
        $src = imagecreatefrompng(XOOPS_ROOT_PATH.'/modules/momoImage/images/noimage_80_80.png');
        ImageCopyResampled($newImage,$src,0,0,0,0,$sizeWidth,$sizeHeight,80,80);
        if ($outFileName == ''){
            return imagepng($newImage);
        } else {
            imagepng($newImage, self::getThumbnailPath().'/'.$outFileName);
            return self::getThumbnailUrl().'/'.$outFileName;
        }
	}
}
