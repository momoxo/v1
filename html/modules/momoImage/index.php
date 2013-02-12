<?php
/* 画像加工のためのモジュール */
include ('../../mainfile.php');


//
$param = array();

foreach($_GET as $key=>$value){
    $param[$key] = htmlspecialchars($value);
}

momoimage::createThumbnail($param['url'], '', $param['width'], $param['height'], $param['kind']);

?>