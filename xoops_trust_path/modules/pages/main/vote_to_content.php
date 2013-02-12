<?php

// common prepend
require dirname(dirname(__FILE__)).'/include/common_prepend.inc.php' ;
// global $breadcrumbsObj, $pagesRequest, $permissions, $currenCategoryObj
// global $xoopsModuleConfig(overridden)

// controller
require_once dirname(dirname(__FILE__)).'/class/PagesControllerVoteContent.class.php' ;
$controller = new PagesControllerVoteContent( $currentCategoryObj ) ;
$controller->execute( $pagesRequest ) ;
$controller->render() ;

?>