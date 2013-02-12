<?php

define('_MD_PAGES_FILTERS_HTMLSPECIALCHARSINITWEIGHT',5);

function pages_htmlspecialchars( $mydirname , $text , $content4assign )
{
	return htmlspecialchars( $text , ENT_QUOTES ) ;
}

?>