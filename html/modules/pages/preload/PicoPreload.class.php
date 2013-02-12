<?php

if( ! defined( 'XOOPS_TRUST_PATH' ) ) die( 'set XOOPS_TRUST_PATH into mainfile.php' ) ;

$mydirname = basename( dirname( dirname( __FILE__ ) ) ) ;
$mydirpath = dirname( dirname( __FILE__ ) ) ;
require $mydirpath.'/mytrustdirname.php' ; // set $mytrustdirname
require_once XOOPS_TRUST_PATH.'/modules/pages/class/pages.php' ;

require XOOPS_TRUST_PATH.'/modules/'.$mytrustdirname.'/preload.php' ;

?>