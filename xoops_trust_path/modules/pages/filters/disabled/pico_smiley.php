<?php

define('_MD_PAGES_FILTERS_SMILEYINITWEIGHT',30);

function pages_smiley( $mydirname , $text , $content4assign )
{
	$myts = MyTextSanitizer::getInstance() ;

	// html=on, smiley=0, xcode=1, $image=1, $br=0
	$text = $myts->smiley( $text ) ;
	return $text ;
}

?>
