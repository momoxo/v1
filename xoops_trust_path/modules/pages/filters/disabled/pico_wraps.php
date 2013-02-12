<?php

define('_MD_PAGES_FILTERS_WRAPSINITWEIGHT',0);

function pages_wraps( $mydirname , $text , $content4assign )
{
	if( empty( $content4assign['vpath'] ) ) return $text ;

	if( ! function_exists( 'pages_convert_encoding_to_ie' ) ) {
		@include_once XOOPS_TRUST_PATH.'/modules/pages/language/'.@$GLOBALS['xoopsConfig']['language'].'/main.php' ;
	}

	$wrap_full_path = XOOPS_TRUST_PATH._MD_PAGES_WRAPBASE.'/'.$mydirname.str_replace('..','',$content4assign['vpath']) ;

	if( file_exists( $wrap_full_path ) ) {
		ob_start() ;
		include $wrap_full_path ;
		$text = ob_get_contents() ;
		ob_end_clean() ;
		if( preg_match( '/\<body[^<>]*\>(.*)\<\/body\>/is' , $text , $regs ) ) {
			$text = $regs[1] ;
		}
	}

	if( function_exists( 'pages_convert_encoding_to_ie' ) ) {
		return pages_convert_encoding_to_ie( $text ) ;
	} else {
		return $text ;
	}
}

?>