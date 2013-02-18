<?php

require_once dirname(dirname(__FILE__)).'/include/main_functions.php' ;
require_once dirname(dirname(__FILE__)).'/include/history_functions.php' ;

// set $cat_id,$content_id from $content_history_id
$content_history_id = intval( @$_GET['content_history_id'] ) ;
list( $_REQUEST['cat_id'] , $_REQUEST['content_id'] , ) = pages_get_content_history_profile( $mydirname , $content_history_id ) ;

// common prepend
require dirname(dirname(__FILE__)).'/include/common_prepend.inc.php' ;
// global $breadcrumbsObj, $pagesRequest, $permissions, $currenCategoryObj
// global $xoopsModuleConfig(overridden)

// add request
$pagesRequest['content_history_id'] = $content_history_id ;
$pagesRequest['view'] = 'download' ;

// controller
require_once dirname(dirname(__FILE__)).'/class/PagesControllerGetHistory.class.php' ;
$controller = new PagesControllerGetHistory( $currentCategoryObj ) ;
$controller->execute( $pagesRequest ) ;

// render
if( $controller->isNeedHeaderFooter() ) {
	$xoopsOption['template_main'] = $controller->getTemplateName() ;
	include XOOPS_ROOT_PATH.'/header.php';
	$xoopsTpl->assign( $controller->getAssign() ) ;
	$xoopsTpl->assign( 'xoops_module_header' , pages_main_render_moduleheader( $mydirname , $xoopsModuleConfig , $controller->getHtmlHeader() ) . $xoopsTpl->get_template_vars( 'xoops_module_header' ) ) ;
	include XOOPS_ROOT_PATH.'/footer.php';
} else {
	$controller->render() ;
}
exit ;

?>