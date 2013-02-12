<?php

require_once dirname(__FILE__).'/PagesControllerAbstract.class.php' ;
require_once dirname(__FILE__).'/PagesModelCategory.class.php' ;

class PagesControllerGetAllcontents extends PagesControllerAbstract {

var $countPerPage;

function execute( $request )
{
	parent::execute( $request ) ;

	$pages = new pages();
	switch (pages::getModuleDirName()){
		case 'blog':
		case 'news':
            $this->countPerPage = pages::getConfigItem('comment_posts_num');
			break;
	}
	// check existence
	if( $this->currentCategoryObj->isError() ) {
		redirect_header( XOOPS_URL."/modules/$this->mydirname/index.php" , 2 , _MD_PAGES_ERR_READCATEGORY ) ;
		exit ;
	}

	$cat_data = $this->currentCategoryObj->getData() ;
	$this->assign['category'] = $this->currentCategoryObj->getData4html() ;

    $breadcrumbsObj = AltsysBreadcrumbs::getInstance() ;
    $this->assign['xoops_breadcrumbs'] = $breadcrumbsObj->getXoopsbreadcrumbs() ;
    $this->assign['xoops_pagetitle'] = $this->assign['category']['title'] ;

	$category = $this->currentCategoryObj->getData4html() ;
	$subcattree = $category['redundants']['subcattree_raw'];
	$categories = array();
	if((count($subcattree) < 1) and (pages::getModuleDirName() == 'news')){
		// rebuild category tree
		require_once dirname(dirname(__FILE__)).'/include/transact_functions.php' ;
		list( $tree_array , $subcattrees , $contents_total , $subcategories_total , $subcategories_ids_cs ) = pages_makecattree_recursive( 'news' , 0 ) ;
		$subcattree = $subcattrees['subcattree_raw'];
	}
	foreach($subcattree as $subcategory){
//		$depth = $subcategory['depth'] - 1;
//		$title = str_repeat('-', $depth).$subcategory['cat_title'];
		$id = $subcategory['cat_id'];
		$categories[$id] = $subcategory['cat_title'];
	}
	$this->assign['categories'] = $categories;
	// permission check
	if( ! $cat_data['can_read'] ) {
		redirect_header( XOOPS_URL."/modules/$this->mydirname/index.php" , 2 , _MD_PAGES_ERR_READCATEGORY ) ;
		exit ;
	}
	
	$count = $this->currentCategoryObj->getLatestContentsCount( true ) ;
	// contents (order by modified_time DESC)
	$this->assign['contents'] = array() ;
	$start = 0;
	$start = ($request['pagenum'] - 1) * $this->countPerPage;
	$contentObjs = $this->currentCategoryObj->getLatestContentsStart( $this->countPerPage , $start, true ) ;
	foreach( $contentObjs as $contentObj ) {
		$content_data = $contentObj->getData() ;
		if( $content_data['can_read'] ) {
			$this->assign['contents'][] = array(
				'body4rss' => htmlspecialchars( xoops_substr( strip_tags( $content_data['body_cached'] ) , 0 , 255 ) , ENT_QUOTES ) ,
				'created_time4rss' => date( 'r' , $content_data['created_time'] ) ,
				'modified_time4rss' => date( 'r' , $content_data['modified_time'] ) ,
			) + $contentObj->getData4html() ;
		}
	}
	
	// ページナビ編集
	$this->_pageNavi($request ,$count);
	
	// views
	
	if( substr($request['view'],-17) == '_main_allcontents' ) {
		$this->template_name = pages::getModuleDirName().'_main_allcontents.html' ;
		$this->is_need_header_footer = true ;
	}
}


private function _pageNavi($request , $count)
{
	/*----------------------------------------------------------
	  ページナビ編集
	  -------------------------------------------------------- */
	$cat_link = '';
	if(isset($request['cat_id'])){
		if(intval($request['cat_id']) > 0){
			$cat_link = '&cat_id='.$request['cat_id'];
		}
	}
	$pageNum = $request['pagenum'];
	$maxPageNum = ceil($count / $this->countPerPage);
	// 現在ページの前後に何ページずつ表示するか
	$prevNextPages = 3;

	$linkString = '<a href="index.php?pagenum=%s'.$cat_link.'">%s</a> ';
	$buttonLink= '<a href="index.php?pagenum=%s'.$cat_link.'"><img src="'.XOOPS_URL.'/themes/pages_pre/images/navi_%s.png" alt="%s" align="absMiddle"></a>';

	// 現在ページを中心としたリンクを作成---------------------
	$currentPagesLink = '';
	// 前ページ
	for($i = $pageNum - $prevNextPages;$i < $pageNum;$i++){
		if($i < 1){
		} else {
			$currentPagesLink .= sprintf($linkString,$i,$i);
		}
	}
	// 現在ページ
	$currentPagesLink .= ' ' .$pageNum.' ';
	// 後ページ
	for($i = $pageNum + 1;$i <= $pageNum+$prevNextPages;$i++){
		if($i > $maxPageNum){
			break;
		} else {
			$currentPagesLink .= sprintf($linkString,$i,$i);
		}
	}
	// 前ページボタン作成-----------------------------------------
	if($pageNum == 1){
		// 1ページ目だったときはボタンを出さない
		$leftButtonLink = '';
	} else {
		$leftButtonLink = sprintf($buttonLink,$pageNum - 1,'left','前へ移動');
	}
	// 最小ページリンク作成---------------------------------------
	if($pageNum <= $prevNextPages + 1){
		// 1ページ目を含む前ページがあるときは何も出さない
		$leftLink = '';
	} else {
		if($pageNum > $prevNextPages + 2){
			// 1ページ目と現在ページの間が空いているときは…を出す
			$leftLink = sprintf($linkString,1,1).'…';
		} else {
			// 1ページ目と現在ページの間が空いていないときは1ページ目だけのリンク
			$leftLink = sprintf($linkString,1,1);
		}
	}
	// 後ページボタン作成-----------------------------------------
	if($pageNum == $maxPageNum){
		// 最終ページのときはボタンを出さない
		$rightButtonLink = '';
	} else {
		$rightButtonLink = sprintf($buttonLink,$pageNum + 1,'right','次へ移動');
	}
	// 最大ページリンク作成---------------------------------------
	if($pageNum >= $maxPageNum - $prevNextPages){
		// 最終ページを含む後ページがあるときはリンクを出さない
		$rightLink = '';
	} else {
		$culc = $maxPageNum - $prevNextPages - 1;
		if($pageNum < $culc){
			// 最終ページと現在ページの間が空いているときは…を出す
			$rightLink ='…'. sprintf($linkString,$maxPageNum,$maxPageNum);
		} else {
			// 最終ページと現在ページの間が空いていないときは最終ページだけのリンク
			$rightLink = sprintf($linkString,$maxPageNum,$maxPageNum);
		}
	}
	
	// ページナビの値をアサインする-----------------------------
	$this->assign['count'] = $count;
	$this->assign['pagenum'] = $pageNum;
	$this->assign['max_page_num'] = $maxPageNum;
	$this->assign['navi_each_link'] = $currentPagesLink;
	$this->assign['navi_left_link'] = $leftLink;
	$this->assign['navi_right_link'] = $rightLink;
	$this->assign['navi_left_button_link'] = $leftButtonLink;
	$this->assign['navi_right_button_link'] = $rightButtonLink;
}

}

?>
