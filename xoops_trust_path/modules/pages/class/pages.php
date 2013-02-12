<?php
/*
 * pagesの中で共通に使う機能
 */
class pages
{


protected static $allContentsModule = Array(
		'blog',
		'news',
		'report',
	);

    protected static $archiveModule = Array(
        'news',
    );

    protected static $showHeaderNaviModule = Array(
        'report',
    );

	protected static $youbi = Array('(日曜日)','(月曜日)','(火曜日)','(水曜日)','(木曜日)','(金曜日)','(土曜日)',);
	
	
	/* 日付を曜日入りで編集 */
	static public function formatTimestamp($timestamp, $option='')
	{
		$formatTime = formatTimestamp($timestamp ,'Y年n月j日');
		$youbiNum = formatTimestamp($timestamp ,'w');
		switch($option){
			case '':
				// オプション指定のないとき：xxxx年xx月xx日(曜) hh:mm
				$formatTime .= self::$youbi[$youbiNum].' '.formatTimestamp($timestamp ,'h:i');
				break;
			case 'ymdw':
				// オプション ymd：xxxx年xx月xx日(曜)
				$formatTime .= self::$youbi[$youbiNum];
				break;
			case 'ymd':
				// オプション ymd：xxxx年xx月xx日
				break;
		}
		return $formatTime;
	}
	
	/* モジュール名取得 */
	static public function getModuleDirName()
	{
		$root = XCube_Root::getSingleton();
        if(is_object($root->mContext->mModule)){
            if(is_object($root->mContext->mModule->mXoopsModule)){
                return $root->mContext->mModule->mXoopsModule->get('dirname');
            }
        }
		return false;
	}
	
	/* pagesで　allcontents表示をするモジュールかどうかの判定 */
	/* allcontents表示＝ディレクトリ名だけで呼び出したとき、blogのようにコンテンツ一覧で表示する */
	static public function isAllContents()
	{
		if (strlen(array_search(self::getModuleDirName(),self::$allContentsModule)) < 1){
			return false;
		}
		return true;
	}
	
	/* pagesで　archive表示をするモジュールかどうかの判定 */
	/* page=archive のとき、過去の一覧を表示する表示 */
	static public function isArchive()
	{
		if (strlen(array_search(self::getModuleDirName(),self::$archiveModule)) < 1){
			return false;
		}
		return true;
	}

	/* 指定されたモジュールのディレクトリからファイル名一覧を返す */
	static public function getFileNameFromDir($dirName)
	{
		$fileArray = array();
		foreach (glob($dirName.'/*.*') as $file){
			if(basename($file) != 'alt.txt'){
				$fileArray[] = basename($file);
			}
		}
		
		return $fileArray;
	}

	/* 指定されたモジュールのディレクトリにあるalt用テキストを読み込んで配列で返す */
	static public function getAltFromDir($dirName)
	{
		$altArray = array();
		$altFile = $dirName . '/alt.txt';
		if (file_exists($altFile)) {
			$fileArray = array();
			$lines = file_get_contents($altFile, true);
			$lineArray = explode("\n", $lines);
			foreach($lineArray as $line){
				list($key, $value) = explode(',', $line);
				$altArray[$key] = $value;
			}
		}
		return $altArray;
	}

	/* 指定されたモジュールのディレクトリからファイル名一覧とaltを返す */
	static public function getFileNameAltFromDir($dirName)
	{
		$icon = self::getFileNameFromDir($dirName);
		$alt = self::getAltFromDir($dirName);
		$ret['icon'] = $icon;
		$ret['alt'] = $alt;
		return $ret;
	}
	
	static public function getAllContentsModule($key = '')
	{
		if($key == ''){
			return self::$allContentsModule;
		} else {
			return self::$allContentsModule[$key];
		}
	}

    static public function showHeaderImageNavi()
    {
        if (strlen(array_search(self::getModuleDirName(),self::$showHeaderNaviModule)) < 1){
            return false;
        }
        return true;
    }

    static public function getHeaderImageNavi($currentContent, $prevContents, $nextContents)
    {
        $headerNavi = array();

        if (strlen(array_search(self::getModuleDirName(),self::$showHeaderNaviModule)) < 1){
            return false;
        }
        // IDレコードの前後6レコードずつを取得する
        // 値を設定して返す
        $prevCount = count($prevContents);
        $nextCount = count($nextContents);
        $result['prev_content_id'] = 0;
        $result['next_content_id'] = 0;
        switch ($prevCount){
            case 3:
            case 4:
            case 5:
            case 6:
                $headerNavi[0] = $prevContents[2];
                $headerNavi[1] = $prevContents[1];
                $headerNavi[2] = $prevContents[0];
                $key = 2;
                break;
            case 2:
                $headerNavi[0] = $prevContents[1];
                $headerNavi[1] = $prevContents[0];
                $key = 1;
                break;
            case 1:
                $headerNavi[0] = $prevContents[0];
                $key = 0;
                break;
        }
        if(isset($headerNavi[0])){
            $result['prev_content_id'] = $prevContents[0];
        }
        if($prevCount > 0){
            $key++;
        } else {
            $key = 0;
        }
        $headerNavi[$key] = $currentContent['content_id'];

        for ($i=0;$key < 6;$i++){
            if(isset($nextContents[$i]) == false){
                break;
            }
            $key++;
            $headerNavi[$key] = $nextContents[$i];
            if($result['next_content_id'] == 0){
                $result['next_content_id'] = $nextContents[$i];
            }
        }
        $result['headerNavi'] = $headerNavi;
        return $result;
    }

    static public function  createHeaderImageNaviThumbnail($id, $body)
    {
        // ヘッダ画像ナビ　カレント　max82　それいがい　max72
        // 日付をもらって新しくなければ作らないようにする
        $firstImage = self::getFirstImage($body);
        self::createThumbnail($firstImage,self::getModuleDirName().'_header_navi_current_'.$id,82,82,'max');
        self::createThumbnail($firstImage,self::getModuleDirName().'_header_navi_other_'.$id,72,72,'max');
    }

    static public function allCreateHeaderImageNaviThumbnail($contentObjs)
    {
        foreach( $contentObjs as $contentObj ) {
            $content_data = $contentObj->getData();
            if( $content_data['can_read'] ) {
                self::createHeaderImageNaviThumbnail($content_data['content_id'],$content_data['body']);
            }
        }

    }

    static public function isModuleAdmin($dirname)
    {
        $root = XCube_Root::getSingleton();

        $roleManager = new Legacy_RoleManager();
        $roleManager->loadRolesByDirname($dirname);

        if ( $root->mContext->mUser->isInRole('Module.'.$dirname.'.Admin') ) {
            return true;
        } else {
            return false;
        }
    }
    static public function isAdministrator()
    {
        return self::isInRoleSite('Site.Administrator');
    }

    static public function isSiteOwner()
    {
        return self::isInRoleSite('Site.Owner');
    }

    static public function isGuest()
    {
        return self::isInRoleSite('Site.GuestUser');
    }

    static public function isMember()
    {
        return self::isInRoleSite('Site.RegisteredUser');
    }

    static public function isContentsAdministrator()
    {
        if(self::isAdministrator()){
			return true;
		} else {
			return self::isInGroup(XOOPS_GROUP_CONTENTS_ADMIN);
		}
	}
	
    static public function isInGroup($goupId)
    {
		global $xoopsUser;
        $group_id_list = $xoopsUser->getGroups();
        return in_array($goupId, $group_id_list);
    }

    static public function isInRoleSite($role)
    {
        $root = XCube_Root::getSingleton();
        $user = $root->mContext->mUser;
        if ( $user->isInRole($role) ) {
            return true;
        }
        return false;
    }


    static public function getXoopsModuleInfo($item)
    {
		// ex. dirname,mid,name
		$root = XCube_Root::getSingleton();
		return $root->mContext->mModule->mXoopsModule->get($item);
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
	
    static public function getCatIdFromString($string)
	{
		// cat_idという文字列を持つ文字列からcat_idをGETする
		$uriArray = explode('cat_id=',$string);
		$uriCatId = $uriArray[1];
		if(strpos($uriCaId, '&') === false){
		} else {
			$uriCatArray = explode('&', $uriCaId);
			$uriCatId = $uriCatArray[0];
		}

		return $uriCatId;
		
		
	}
	
    static public function getCatIdFromUri()
    {
		// content_idという文字列が現在のURLにあったら、カテゴリーIDをGETする
		$requestUri = $_SERVER['REQUEST_URI'];
		
		
		if(self::existContentIdString($requestUri) == false){
			return 0;
		} else {
			// URIからcontent_idを取得する
			$contentId = self::getContentIdFromUri($requestUri);
			// content_idからカテゴリーをGETする
			$moduleName = self::getModuleDirName();
			
            $objTemp = new PagesContent( $moduleName , $contentId ) ;
            return $objTemp->data['cat_id'];
		}

	}
	
	static public function existContentIdString($string)
	{
		// uriなどの文字列に　content_id という文字列が存在するかどうか
		if(strpos($string, 'content_id') === false){
			return false;
		}
		return true;
	}
	
	static public function getContentIdFromUri($string)
	{
		// uriなどの文字列からcontentIDを取得する
		$uriArray = explode('content_id=',$string);
		$uriContentId = $uriArray[1];
		if(strpos($uriContentId, '&') === false){
		} else {
			$uriContentArray = explode('&', $uriContentId);
			$uriContentId = $uriContentArray[0];
		}
		return $uriContentId;
	}

    /* 一般設定の値を取得 */
    static public function getConfigItem($name)
    {
        $root = XCube_Root::getSingleton();
        return $root->mContext->mModuleConfig[$name];
    }

}
