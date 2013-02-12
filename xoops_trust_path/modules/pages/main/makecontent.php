<?php

define( 'PAGES_URI_MAPPER_ALLOW_CAT_ID_OVERWRITING' , true ) ;

// common prepend
require dirname(dirname(__FILE__)).'/include/common_prepend.inc.php' ;
// global $breadcrumbsObj, $pagesRequest, $permissions, $currenCategoryObj
// global $xoopsModuleConfig(overridden)


// redirecting for wraps mode and restoring after redirection
if( $xoopsModuleConfig['use_wraps_mode'] ) {
	$uriMapper->redirect4WrapsPreview() ;
}

// request
$pagesRequest['makecontent'] = true ;

// deciding controller
if( ! empty( $_POST['contentman_preview'] ) ) {
	$controller_class = 'PagesControllerPreviewContent' ;
} else if( ! empty( $_POST['contentman_post'] ) ) {
	$controller_class = 'PagesControllerInsertContent' ;
} else {
	$controller_class = 'PagesControllerEditContent' ;
}

require_once dirname(dirname(__FILE__)).'/class/'.$controller_class.'.class.php' ;
$controller = new $controller_class( $currentCategoryObj ) ;
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