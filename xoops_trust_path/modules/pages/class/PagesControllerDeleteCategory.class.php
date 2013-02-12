<?php

require_once dirname(__FILE__).'/PagesControllerAbstract.class.php' ;
require_once dirname(__FILE__).'/PagesModelCategory.class.php' ;
require_once dirname(__FILE__).'/gtickets.php' ;
require_once dirname(dirname(__FILE__)).'/include/transact_functions.php' ;

class PagesControllerDeleteCategory extends PagesControllerAbstract {

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
	// Ticket Check
	if ( ! $GLOBALS['xoopsGTicket']->check( true , 'pages' ) ) {
		redirect_header(XOOPS_URL.'/',3,$GLOBALS['xoopsGTicket']->getErrors());
	}

	parent::execute( $request ) ;

	// $categoryObj (not parent)
	$pagesPermission = PagesPermission::getInstance() ;
	$categoryObj = new PagesCategory( $this->mydirname , $request['cat_id'] , $pagesPermission->getPermissions( $this->mydirname ) ) ;

	// check existence
	if( $categoryObj->isError() ) {
		redirect_header( XOOPS_URL."/modules/$this->mydirname/index.php" , 2 , _MD_PAGES_ERR_READCONTENT ) ;
		exit ;
	}
	$cat_data = $categoryObj->getData() ;

	// permission check
	if( empty( $cat_data['isadminormod'] ) ) {
		redirect_header( XOOPS_URL.'/' , 2 , _MD_PAGES_ERR_CATEGORYMANAGER ) ;
	}

	// cat_id != 0 check
	if( $cat_data['id'] == 0 ) {
		// LANGTD
		redirect_header( XOOPS_URL.'/' , 2 , 'top category cannot be deleted' ) ;
	}

	// children check
	if( count( $cat_data['redundants']['subcattree_raw'] ) > 0 ) {
		// LANGTD
		redirect_header( XOOPS_URL.'/' , 2 , 'child categories exist' ) ;
	}

	// delete transaction
	pages_delete_category( $this->mydirname , $request['cat_id'] ) ;

	// view
	$this->is_need_header_footer = false ;
}

function render()
{
	redirect_header( XOOPS_URL."/modules/$this->mydirname/" , 2 , _MD_PAGES_MSG_CATEGORYDELETED ) ;
	exit ;
}


}

?>
