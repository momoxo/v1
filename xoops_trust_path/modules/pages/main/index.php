<?php

require_once dirname(dirname(__FILE__)).'/include/common_functions.php' ;
require_once dirname(dirname(__FILE__)).'/class/pages.textsanitizer.php' ;
require_once dirname(dirname(__FILE__)).'/class/PagesUriMapper.class.php' ;
require_once dirname(dirname(__FILE__)).'/class/PagesPermission.class.php' ;
require_once dirname(dirname(__FILE__)).'/class/PagesModelCategory.class.php' ;
require_once dirname(dirname(__FILE__)).'/class/PagesModelContent.class.php' ;
//require_once XOOPS_TRUST_PATH.'/libs/pages/pages.php' ;

// common prepend
require dirname(dirname(__FILE__)).'/include/common_prepend.inc.php' ;
// global $breadcrumbsObj, $pagesRequest, $permissions, $currenCategoryObj
// global $xoopsModuleConfig(overridden)

// modifying controller/view of $pagesRequest
$pagesRequest = $uriMapper->modifyRequest( $pagesRequest , $currentCategoryObj ) ;

// #7983対応
//$pages = new pages();
if( $pagesRequest['controller'] == 'content' ) {
	// content (viewcontent)
	require_once dirname(dirname(__FILE__)).'/class/PagesControllerGetContent.class.php' ;
	$controller = new PagesControllerGetContent( $currentCategoryObj ) ;
} else if( $pagesRequest['controller'] == 'htmlwrapped' ) {
	// just html wrapping (viewcontent)
	require_once dirname(dirname(__FILE__)).'/class/PagesControllerGetHtmlwrapped.class.php' ;
	$controller = new PagesControllerGetHtmlwrapped( $currentCategoryObj ) ;
} else if( $pagesRequest['controller'] == 'category' ) {
        // #7983対応
        if(pages::isAllContents() == true){
            require_once dirname(dirname(__FILE__)).'/class/PagesControllerGetAllcontents.class.php' ;
            $controller = new PagesControllerGetAllcontents( $currentCategoryObj ) ;
        } else {
            // category (subcategories and contents)
            require_once dirname(dirname(__FILE__)).'/class/PagesControllerGetCategory.class.php' ;
            $controller = new PagesControllerGetCategory( $currentCategoryObj ) ;
        }
} else if( $pagesRequest['controller'] == 'latestcontents' ) {
	// latestcontents under the category (mainly for rss)
	require_once dirname(dirname(__FILE__)).'/class/PagesControllerGetLatestcontents.class.php' ;
	$controller = new PagesControllerGetLatestcontents( $currentCategoryObj ) ;
} else if( $pagesRequest['controller'] == 'querycontents' ) {
	// querycontents (tag etc)
	require_once dirname(dirname(__FILE__)).'/class/PagesControllerQueryContents.class.php' ;
	$controller = new PagesControllerQueryContents( $currentCategoryObj ) ;
} else if(($pagesRequest['controller'] == 'archive') and (pages::isArchive())) {
	// 過去の一覧のとき
	require_once dirname(dirname(__FILE__)).'/class/PagesControllerGetArchive.class.php' ;
	$controller = new PagesControllerGetArchive( $currentCategoryObj ) ;
} else if( $pagesRequest['controller'] == 'allcontents' ) {
	if(pages::getModuleDirName() == 'report'){
		// 建築現場レポートのとき　アーカイブと最新から全件の両方表示する
		require_once dirname(dirname(__FILE__)).'/class/PagesControllerGetReport.class.php' ;
		$controller = new PagesControllerGetReport( $currentCategoryObj ) ;
	} else {
		// #7983 blogのとき newsのとき
		require_once dirname(dirname(__FILE__)).'/class/PagesControllerGetAllcontents.class.php' ;
		$controller = new PagesControllerGetAllcontents( $currentCategoryObj ) ;

	}
} else {
	// menu
    // ログインしていないときはトップに飛ばす
        if(pages::isGuest()){
            redirect_header( XOOPS_URL."/modules/$mydirname/index.php" , 2  ,'') ;
        }

        require_once dirname(dirname(__FILE__)).'/class/PagesControllerGetMenu.class.php' ;
        $controller = new PagesControllerGetMenu( $currentCategoryObj ) ;
}

// execute
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