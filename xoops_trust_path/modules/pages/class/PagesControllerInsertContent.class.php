<?php

require_once dirname(__FILE__).'/PagesControllerAbstract.class.php' ;
require_once dirname(__FILE__).'/PagesModelCategory.class.php' ;
require_once dirname(__FILE__).'/PagesModelContent.class.php' ;
require_once dirname(__FILE__).'/gtickets.php' ;
require_once dirname(dirname(__FILE__)).'/include/transact_functions.php' ;
require_once dirname(dirname(__FILE__)).'/include/history_functions.php' ;

class PagesControllerInsertContent extends PagesControllerAbstract {

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

	// initialize
	$cat_data = $this->currentCategoryObj->getData() ;
	$pagesPermission = PagesPermission::getInstance() ;

	// permission check
	if( empty( $cat_data['can_post'] ) ) {
		redirect_header( XOOPS_URL.'/' , 2 , _MD_PAGES_ERR_MAKECONTENT ) ;
	}

	// insert a content
	$content_id = pages_makecontent( $this->mydirname , $cat_data['post_auto_approved'] , $cat_data['isadminormod'] ) ;
	$content_uri4html = XOOPS_URL."/modules/$this->mydirname/".pages_common_make_content_link4html( $this->mod_config , $content_id , $this->mydirname ) ;

	// get contentObj
	$this->contentObj = new PagesContent( $this->mydirname , $content_id , $this->currentCategoryObj ) ;
	$content_data = $this->contentObj->getData() ;

	// return uri
	if( ! empty( $_GET['ret'] ) && ( $ret_uri = pages_main_parse_ret2uri( $this->mydirname , $_GET['ret'] ) ) ) {
		$ret_uri4html = htmlspecialchars( $ret_uri , ENT_QUOTES ) ;
	} else {
		$ret_uri4html = $content_uri4html ;
	}

	// calling a delegate
	if( class_exists( 'XCube_DelegateUtils' ) ) {
		XCube_DelegateUtils::raiseEvent( 'ModuleClass.Pages.Contentman.InsertSuccess' , $this->mydirname , $content_id , $cat_data , $ret_uri4html ) ;
	}

	// create extra_tags for notifications
	$extra_tags = array(
		'CONTENT_URL' => pages_common_unhtmlspecialchars( $content_uri4html ) ,
		'APPROVAL_URL' => XOOPS_URL."/modules/$this->mydirname/index.php?page=contentmanager&content_id=$content_id" ,
		'CAT_TITLE' => $cat_data['cat_title'] ,
		'CONTENT_SUBJECT' => $content_data['subject_raw'] ,
	) ;

	// users2notify (can_readfull only)
	$users2notify = $pagesPermission->getUidsFromCatid( $this->mydirname , $cat_data['id'] , 'can_readfull' ) ;
    // 更新者が管理権限を持っているとき
    if(pages::isModuleAdmin(pages::getModuleDirName())){
        // 上部画像ナビを表示するモジュールだったら画像を登録しておく
        if(pages::showHeaderImageNavi()){
            pages::createHeaderImageNaviThumbnail($content_id,$content_data['body']);
        }
        if(pages::getModuleDirName() == 'report'){
            // 建築現場レポートだったらサムネールを作成しておく
            $imageUrl = pages::getFirstImage($content_data['body']);
            pages::createThumbnail($imageUrl, 'report'.$content_id, 110, 110, 'max');
        }
    }

	if( $cat_data['post_auto_approved'] ) {
		// Notify for new content 'global'
		pages_main_trigger_event( $this->mydirname , 'global' , 0 , 'newcontent' , $extra_tags , $users2notify , 0 ) ;
		// Notify for new content 'category' of all parental categories
		foreach( array_keys( $cat_data['paths_raw'] ) as $cat_id ) {
			pages_main_trigger_event( $this->mydirname , 'category' , $cat_id , 'newcontent' , $extra_tags , $users2notify , 0 ) ;
		}
		// message "registered"
		redirect_header( $ret_uri4html , 2 , _MD_PAGES_MSG_CONTENTMADE ) ;
	} else {
		// Notify for new waiting content (only for admin or mod)
		$users2notify = pages_main_get_moderators( $this->mydirname , $cat_data['id'] ) ;
		if( empty( $users2notify ) ) $users2notify = array( 0 ) ;
		pages_main_trigger_event( $this->mydirname , 'global' , 0 , 'waitingcontent' , $extra_tags , $users2notify ) ;
		// message "waiting approval"
		redirect_header( $ret_uri4html , 2 , _MD_PAGES_MSG_CONTENTWAITINGREGISTER ) ;
	}

	// view
	$this->is_need_header_footer = false ;


}

function render()
{
	exit ;
}


}

?>
