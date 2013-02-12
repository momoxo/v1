<?php

require_once dirname(__FILE__).'/PagesControllerAbstract.class.php' ;
require_once dirname(__FILE__).'/PagesModelCategory.class.php' ;
require_once dirname(__FILE__).'/PagesModelContent.class.php' ;
require_once dirname(__FILE__).'/gtickets.php' ;
require_once dirname(dirname(__FILE__)).'/include/transact_functions.php' ;
require_once dirname(dirname(__FILE__)).'/include/history_functions.php' ;

class PagesControllerCopywaitingContent extends PagesControllerAbstract {

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

var $contentObj ;

function execute( $request )
{
	// Ticket Check
	if ( ! $GLOBALS['xoopsGTicket']->check( true , 'pages' ) ) {
		redirect_header(XOOPS_URL.'/',3,$GLOBALS['xoopsGTicket']->getErrors());
	}

	parent::execute( $request ) ;

	// contentObj
	$cat_data = $this->currentCategoryObj->getData() ;
	$this->contentObj = new PagesContent( $this->mydirname , $request['content_id'] , $this->currentCategoryObj ) ;

	// check existence
	if( $this->contentObj->isError() ) {
		redirect_header( XOOPS_URL."/modules/$this->mydirname/index.php" , 2 , _MD_PAGES_ERR_READCONTENT ) ;
		exit ;
	}
	$content_data = $this->contentObj->getData() ;

	// permission check (isadminormod)
	if( empty( $content_data['isadminormod'] ) ) {
		redirect_header( XOOPS_URL.'/' , 2 , _MD_PAGES_ERR_CATEGORYMANAGEMENT ) ;
		exit ;
	}

	// copy from waiting eg) body_waiting -> body
	pages_transact_copyfromwaitingcontent( $this->mydirname , $request['content_id'] ) ;

	// view
	$this->is_need_header_footer = false ;
}

function render()
{
	redirect_header( XOOPS_URL."/modules/$this->mydirname/".pages_common_make_content_link4html( $this->mod_config , $this->contentObj->getData() ) , 2 , _MD_PAGES_MSG_CONTENTUPDATED ) ;
	exit ;
}


}

?>