<?php

require_once XOOPS_TRUST_PATH.'/modules/pages/class/FormProcessByHtml.class.php' ;
require_once XOOPS_TRUST_PATH.'/modules/pages/class/PagesFormProcessBySmartyBase.class.php' ;


function smarty_function_survey( $params , &$smarty )
{
	$controller = new PagesFormProcessBySmartySurvey() ;
	$controller->canPostAgain = false ; // default false for survey
	$controller->parseParameters( $params ) ;
	$controller->execute( $params , $smarty ) ;
}


class PagesFormProcessBySmartySurvey extends PagesFormProcessBySmartyBase
{
	function __construct()
	{
		$this->mypluginname = 'survey' ;
	}

	function executeLast()
	{
		$this->sendMail() ;
		$this->storeDB() ;
	}

}


?>