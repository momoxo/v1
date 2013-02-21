<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.make_thumbnail_from_text.hp
 * Type:     function
 * Name:     momoImage
 * Purpose:  text中にある画像を加工する
 * -------------------------------------------------------------
 */
function smarty_function_make_thumbnail_from_text($params, &$smarty)
{
  foreach($params as $_key => $_val) {
      switch($_key) {
          case 'body':
          case 'width':
          case 'height':
          case 'kind':
              $$_key = $_val;
              break;
      }
  }
    $image =momoImage::getFirstImage($body);
    return XOOPS_URL.'/modules/momoImage/index.php?url='.$image.'&width='.$width.'&height='.$height.'&kind='.$kind;
}
?>