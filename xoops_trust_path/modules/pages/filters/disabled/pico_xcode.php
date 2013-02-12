<?php

define('_MD_PAGES_FILTERS_XCODEINITWEIGHT',25);

function pages_xcode( $mydirname , $text , $content4assign )
{
	require_once dirname(dirname(__FILE__)).'/class/pages.textsanitizer.php' ;
	$myts = PagesTextSanitizer::getInstance() ;

	// html=on, smiley=0, xcode=1, $image=1, $br=0
	$text = $myts->displayTarea( $text , 1 , 0 , 1 , 1 , 0 ) ;

	$text = $myts->pageBreak( $mydirname , $text , $content4assign ) ;

	return $text ;
}

?>
