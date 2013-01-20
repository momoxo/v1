<?php
// $Id: myheader.php,v 1.6 2006/05/01 02:37:28 onokazu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
/////////////////////////////////////////////////////////////
// Title    : Frame Branding Hack for Xoops Mylinks        //
// Author   : Freeop                                       //
// Email    : Webmaster@belizecountry.com                  //
// Website  : http://www.Belizecountry.com                 //
// System   : Xoops RC 3.0.4 / 3.0.5             10-14-02  //
// Filename : myheader.php                                 //
// Type     : Module Hack for MyLinks                      //
/////////////////////////////////////////////////////////////

// Code below uses users current selected theme style      //

include "../../mainfile.php";
$url = htmlspecialchars(preg_replace( '/javascript:/si' , 'java script:', $_GET['url'] ));
$lid = intval($_GET['lid']);
$cid = intval($_GET['cid']);
echo"<html><head><style><!--.bg1 {    background-color : #E3E4E0;}.bg2 {    background-color : #e5e5e5;}.bg3 {     background-color : #f6f6f6;}.bg4 {    background-color : #f0f0f0;}.bg5 {    background-color : f8f8f8;}body { margin-left: 0px;margin-top: 0px;margin-right: 0px;margin-bottom: 0px;font-family: Tahoma, taipei; color;#000000; font-size: 10px; background-color : #2F5376; color: #ffffff;}a {  font-weight: bold;font-family: Tahoma, taipei; font-size: 10px; text-decoration: none; color: #666666; font-style: normal}A:hover {  font-weight: bold;text-decoration: underline;  font-family: Tahoma, taipei; font-size: 10px; color: #FF9966; font-style: normal}td {  font-family: Tahoma, taipei; color: #000000; font-size: 10px;border-top-width : 1px; border-right-width : 1px; border-bottom-width : 1px; border-left-width : 1px;}img { border:0;}//--></style>";
$mail_subject = rawurlencode(sprintf(_MD_INTRESTLINK,$xoopsConfig['sitename']));
$mail_body = rawurlencode(sprintf(_MD_INTLINKFOUND,$xoopsConfig['sitename']).':  '.XOOPS_URL.'/modules/mylinks/singlelink.php?cid='.$cid.'&lid='.$lid);
?>

</head><body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="150"><a href="<?php echo XOOPS_URL; ?>" target="_BLANK"><img src="<?php echo XOOPS_URL; ?>/images/logo.gif" alt="" /></a>
<td width="100%" align="center">
<table class="bg3" width=95% cellspacing="2" cellpadding="3" border="0" style="border: #e0e0e0 1px solid;"><tr>
<td style="border-bottom: #e0e0e0 1px solid;">
<b><?php echo htmlspecialchars($xoopsConfig['sitename'], ENT_QUOTES); ?></b></td>
</tr>
<tr>
<td class='bg4' align="center"><small>
<a target="main" href="ratelink.php?cid=<?php echo $cid; ?>&amp;lid=<?php echo $lid; ?>"><?php echo _MD_RATETHISSITE; ?></a> | <a target="main" href="modlink.php?lid=<?php echo $lid; ?>"><?php echo _MD_MODIFY; ?></a> | <a target="main" href="brokenlink.php?lid=<?php echo $lid; ?>"><?php echo _MD_REPORTBROKEN; ?></a> | <a target='_top' href='mailto:?subject=<?php echo $mail_subject; ?>&amp;body=<?php echo $mail_body;?>'><?php echo _MD_TELLAFRIEND; ?></a> | <a target='_top' href="<?php echo XOOPS_URL; ?>">Back to <?php echo htmlspecialchars($xoopsConfig['sitename'], ENT_QUOTES); ?></a> | <a target='_top' href="<?php echo $url; ?>">Close Frame</a>
</small></td></tr></table>
</td></tr></table></body></html>
