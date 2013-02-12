<?php

require_once dirname(__FILE__).'/PagesControllerAbstract.class.php' ;
require_once dirname(__FILE__).'/PagesModelCategory.class.php' ;

class PagesControllerGetMenu extends PagesControllerAbstract {

//var $mydirname = '' ;
//var $mytrustdirname = '' ;
//var $assign = array() ;
//var $mod_config = array() ;
//var $uid = 0 ;
//var $currentCategoryObj = null ;
//var $permissions = array() ;
//var $is_need_header_footer = true ;
//var $template_name = '' ;
//var $html_header = '' ;
//var $contentObjs = array() ;

function execute( $request )
{
	parent::execute( $request ) ;

	$categoryHandler = new PagesCategoryHandler( $this->mydirname , $this->permissions ) ;
	$categories = $categoryHandler->getAllCategories() ;

	// auto-register
	foreach( $categories as $categoryObj ) {
		$mod_config = $categoryObj->getOverriddenModConfig() ;
		$register_class = empty( $mod_config['auto_register_class'] ) ? 'PagesAutoRegisterWraps' : $mod_config['auto_register_class'] ;
		require_once dirname(__FILE__).'/'.$register_class.'.class.php' ;
		if( ! empty( $mod_config['wraps_auto_register'] ) ) {
			$register_obj = new $register_class( $this->mydirname , $mod_config ) ;
			$register_obj->registerByCatvpath( $categoryObj->getData() ) ;
		}
	}

	$categories4assign = array() ;
	foreach( $categories as $cat_id => $categoryObj ) {
		// assign categories
		$categories4assign[ $cat_id ] = $categoryObj->getData4html() ;

		// contents loop ロジックがわかりにくいので書き直して修正した
		// #7983対応		
		$root = XCube_Root::getSingleton();
		$moduleDirName = $root->mContext->mModule->mXoopsModule->get('dirname');
		$contentObjs = $categoryObj->getContents( true ) ;
		$private_contents_counter = 0 ;
		foreach( $contentObjs as $contentObj ) {
			$content_data = $contentObj->getData() ;
			//if($moduleDirName == 'blog'){
			if($this->_isNeedApproval($moduleDirName) == true){
				// #7983対応　blogのとき
				// blogの時は未承認データしか出さない
				if($content_data['approval'] == 0){
					$categories4assign[ $cat_id ]['contents'][] = $contentObj->getData4html() ;
				}
			} else {
				if( ! $content_data['public'] ) {
					$private_contents_counter ++ ;
				}else if( $content_data['show_in_menu'] && $content_data['can_read'] ){
						$categories4assign[ $cat_id ]['contents'][] = $contentObj->getData4html() ;
				}
			}
		}
		$categories4assign[ $cat_id ]['private_contents_counter'] = $private_contents_counter ;
	}
	$this->assign['categories'] = $categories4assign ;

	// breadcrumbs and pagetitle
	$lastnode4assign = @$_GET['page'] == 'menu' ? _MD_PAGES_MENU : $GLOBALS['xoopsModule']->getVar('name') ;
	$breadcrumbsObj = AltsysBreadcrumbs::getInstance() ;
	$breadcrumbsObj->appendPath( '' , $lastnode4assign ) ;
	$this->assign['xoops_breadcrumbs'] = $breadcrumbsObj->getXoopsbreadcrumbs() ;
	$this->assign['xoops_pagetitle'] = $lastnode4assign ;
	


	// views (no views other than 'menu')
	$this->template_name = $this->mydirname.'_main_menu.html' ;
	$this->is_need_header_footer = true ;
}


function _isNeedApproval($moduleDirName)
// 承認を必要とするモジュールの判定
{
	$needApprovalModules = array('blog','about','pages','collection','movie','publication','report','news','contents');

	if(strlen(array_search($moduleDirName, $needApprovalModules)) < 1){
		return false;
	}
	return true;

}



}
?>
