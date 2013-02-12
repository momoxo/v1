<?php

require_once dirname(__FILE__).'/PagesControllerAbstract.class.php' ;
require_once dirname(__FILE__).'/PagesModelCategory.class.php' ;
require_once dirname(__FILE__).'/gtickets.php' ;
require_once dirname(dirname(__FILE__)).'/include/transact_functions.php' ;

class PagesControllerUpdateCategory extends PagesControllerAbstract {

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

var $cat_id = 0 ;

function execute( $request )
{
	// Ticket Check
	if ( ! $GLOBALS['xoopsGTicket']->check( true , 'pages' ) ) {
		redirect_header(XOOPS_URL.'/',3,$GLOBALS['xoopsGTicket']->getErrors());
	}

	parent::execute( $request ) ;

	// initialize
	$this->cat_id = $request['cat_id'] ;

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

	// insert a category
	pages_updatecategory( $this->mydirname , $this->cat_id ) ;

	// view
	$this->is_need_header_footer = false ;
}

function render()
{
	redirect_header( XOOPS_URL."/modules/$this->mydirname/".pages_common_make_category_link4html( $this->mod_config , $this->cat_id , $this->mydirname ) , 2 , _MD_PAGES_MSG_CATEGORYUPDATED ) ;
	exit ;
}


}

?>
