# phpMyAdmin MySQL-Dump
# version 2.3.2
# http://www.phpmyadmin.net/ (download page)
#
# Host: localhost
# Generation Time: Jan 09, 2003 at 12:37 AM
# Server version: 3.23.54
# PHP Version: 4.2.2
# Database : `xoops2`


#
# Dumping data for table `config`
#
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (1,0,1,'sitename','_MD_AM_SITENAME','XOOPS Cube Site','_MD_AM_SITENAMEDSC','textbox','text',0);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (2,0,1,'slogan','_MD_AM_SLOGAN','Just Use it!','_MD_AM_SLOGANDSC','textbox','text',2);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (3,0,1,'language','_MD_AM_LANGUAGE','ja_utf8','_MD_AM_LANGUAGEDSC','language','other',4);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (4,0,1,'startpage','_MD_AM_STARTPAGE','--','_MD_AM_STARTPAGEDSC','startpage','other',6);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (5,0,1,'server_TZ','_MD_AM_SERVERTZ','9','_MD_AM_SERVERTZDSC','timezone','float',8);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (6,0,1,'default_TZ','_MD_AM_DEFAULTTZ','9','_MD_AM_DEFAULTTZDSC','timezone','float',10);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (7,0,1,'theme_set','_MD_AM_DTHEME','momoxo_basic','_MD_AM_DTHEMEDSC','theme','other',12);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (8,0,1,'anonymous','_MD_AM_ANONNAME','ゲスト','_MD_AM_ANONNAMEDSC','textbox','text',15);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (9,0,1,'gzip_compression','_MD_AM_USEGZIP','0','_MD_AM_USEGZIPDSC','yesno','int',16);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (11,0,1,'session_expire','_MD_AM_SESSEXPIRE','15','_MD_AM_SESSEXPIREDSC','textbox','int',22);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (13,0,1,'debug_mode','_MD_AM_DEBUGMODE','1','_MD_AM_DEBUGMODEDSC','select','int',24);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (14,0,1,'my_ip','_MD_AM_MYIP','127.0.0.1','_MD_AM_MYIPDSC','textbox','text',29);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (15,0,1,'use_ssl','_MD_AM_USESSL','0','_MD_AM_USESSLDSC','yesno','int',30);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (16,0,1,'session_name','_MD_AM_SESSNAME','xoops_session','_MD_AM_SESSNAMEDSC','textbox','text',20);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (30,0,1,'adminmail','_MD_AM_ADMINML','@@ADMINMAIL@@','_MD_AM_ADMINMLDSC','textbox','text',3);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (32,0,1,'com_mode','_MD_AM_COMMODE','nest','_MD_AM_COMMODEDSC','select','text',34);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (33,0,1,'com_order','_MD_AM_COMORDER','0','_MD_AM_COMORDERDSC','select','int',36);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (37,0,1,'bad_ips','_MD_AM_BADIPS','a:1:{i:0;s:9:\"127.0.0.1\";}','_MD_AM_BADIPSDSC','textarea','array',42);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (40,0,4,'censor_enable','_MD_AM_DOCENSOR','0','_MD_AM_DOCENSORDSC','yesno','int',0);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (41,0,4,'censor_words','_MD_AM_CENSORWRD','a:2:{i:0;s:4:\"fuck\";i:1;s:4:\"shit\";}','_MD_AM_CENSORWRDDSC','textarea','array',1);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (42,0,4,'censor_replace','_MD_AM_CENSORRPLC','#OOPS#','_MD_AM_CENSORRPLCDSC','textbox','text',2);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (44,0,5,'enable_search','_MD_AM_DOSEARCH','1','_MD_AM_DOSEARCHDSC','yesno','int',0);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (45,0,5,'keyword_min','_MD_AM_MINSEARCH','5','_MD_AM_MINSEARCHDSC','textbox','int',1);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (47,0,1,'enable_badips','_MD_AM_DOBADIPS','0','_MD_AM_DOBADIPSDSC','yesno','int',40);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (48,0,1,'cool_uri','_MD_AM_COOLURI','0','_MD_AM_COOLURIDSC','yesno','int',17);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (53,0,1,'use_mysession','_MD_AM_USEMYSESS','0','_MD_AM_USEMYSESSDSC','yesno','int',19);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (57,0,1,'theme_fromfile','_MD_AM_THEMEFILE','0','_MD_AM_THEMEFILEDSC','yesno','int',13);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (58,0,1,'closesite','_MD_AM_CLOSESITE','0','_MD_AM_CLOSESITEDSC','yesno','int',26);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (59,0,1,'closesite_okgrp','_MD_AM_CLOSESITEOK','a:1:{i:0;s:1:\"1\";}','_MD_AM_CLOSESITEOKDSC','group_multi','array',27);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (60,0,1,'closesite_text','_MD_AM_CLOSESITETXT','このサイトはただいまメンテナンス中です。のちほどお越しください。','_MD_AM_CLOSESITETXTDSC','textarea','text',28);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (61,0,1,'sslpost_name','_MD_AM_SSLPOST','xoops_ssl','_MD_AM_SSLPOSTDSC','textbox','text',31);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (62,0,1,'module_cache','_MD_AM_MODCACHE','','_MD_AM_MODCACHEDSC','module_cache','array',50);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (63,0,1,'template_set','_MD_AM_DTPLSET','default','_MD_AM_DTPLSETDSC','tplset','other',14);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (64,0,6,'mailmethod','_MD_AM_MAILERMETHOD','mail','_MD_AM_MAILERMETHODDESC','select','text',4);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (65,0,6,'smtphost','_MD_AM_SMTPHOST','a:1:{i:0;s:0:\"\";}','_MD_AM_SMTPHOSTDESC','textarea','array',6);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (66,0,6,'smtpuser','_MD_AM_SMTPUSER','','_MD_AM_SMTPUSERDESC','textbox','text',7);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (67,0,6,'smtppass','_MD_AM_SMTPPASS','','_MD_AM_SMTPPASSDESC','password','text',8);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (68,0,6,'sendmailpath','_MD_AM_SENDMAILPATH','/usr/sbin/sendmail','_MD_AM_SENDMAILPATHDESC','textbox','text',5);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (69,0,6,'from','_MD_AM_MAILFROM','','_MD_AM_MAILFROMDESC','textbox','text',1);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (70,0,6,'fromname','_MD_AM_MAILFROMNAME','','_MD_AM_MAILFROMNAMEDESC','textbox','text',2);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (71,0,1,'sslloginlink','_MD_AM_SSLLINK','https://','_MD_AM_SSLLINKDSC','textbox','text',33);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (72,0,1,'theme_set_allowed','_MD_AM_THEMEOK','a:3:{i:0;s:12:\"momoxo_basic\";i:1;s:14:\"legacy_default\";i:2;s:16:\"pack2011_default\";}','_MD_AM_THEMEOKDSC','theme_multi','array',13);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (73,0,6,'fromuid','_MD_AM_MAILFROMUID','1','_MD_AM_MAILFROMUIDDESC','user','int',3);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (74,0,3,'meta_keywords','_MI_XCORE_META_KEYWORDS','news, technology, headlines, xoops, cube, xcore, social, network, module, plugin, theme, templates, css, web 2.0, ajax, cms, content management, software, blog, download, downloads, free, community, mp3, forum, forums, bulletin, board, boards, bbs, php, survey, poll, polls, kernel, comment, comments, portal, odp, open, source, opensource, FreeSoftware, bsd, gnu, gpl, license, Unix, *nix, mysql, sql, database, databases, web site','_MI_XCORE_META_KEYWORDS_DESC','textarea','text', 0);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (75,0,3,'meta_description','_MI_XCORE_META_DESCRIPTION','momoxo is a dynamic Object Oriented based open source portal script written in PHP.','_MI_XCORE_META_DESCRIPTION_DESC','textarea','text', 1);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (76,0,3,'meta_robots','_MI_XCORE_META_ROBOTS','index,follow','_MI_XCORE_META_ROBOTS_DESC','select','text', 2);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (77,0,3,'meta_rating','_MI_XCORE_META_RATING','general','_MI_XCORE_META_RATING_DESC','select','text', 3);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (78,0,3,'meta_author','_MI_XCORE_META_AUTHOR','XOOPS Cube','_MI_XCORE_META_AUTHOR_DESC','textbox','text', 4);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (79,0,3,'meta_copyright','_MI_XCORE_META_COPYRIGHT','Copyright &copy; 2001-2012','_MI_XCORE_META_COPYRIGHT_DESC','textbox','text', 5);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (80,0,3,'footer','_MI_XCORE_FOOTER','Powered by <a href=\"http://momoxo-project.org/\" rel=\"external\">momoxo</a> 2.2 &copy; 2001-2012 <a href=\"https://github.com/momoxo/momoxo/\" rel=\"external\">momoxo project</a>','_MI_XCORE_FOOTER_DESC','textarea','text', 6);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (81,0,3,'banners','_MI_XCORERENDER_CONF_BANNERS','0','','yesno','int', 7);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (82,0,3,'pagetitle','_MI_XCORE_PAGETITLE_FORMAT','{modulename} {action} [pagetitle]:[/pagetitle] {pagetitle}','_MI_XCORE_PAGETITLE_FORMAT_DESC','textbox','text', 8);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (83,0,3,'css_file','_MI_XCORE_CSS_FILE','//ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/smoothness/jquery-ui.css','_MI_XCORE_CSS_FILE_DESC','textbox','text', 9);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (84,0,3,'feed_url','_MI_XCORE_FEED_URL','','_MI_XCORE_FEED_URL_DESC','textbox','text', 10);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (85,0,3,'jquery_core','_MI_XCORE_JQUERY_CORE','1','_MI_XCORE_JQUERY_CORE_DESC','textbox','text', 11);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (86,0,3,'jquery_ui','_MI_XCORE_JQUERY_UI','1','_MI_XCORE_JQUERY_UI_DESC','textbox','text', 12);


#
# Dumping data for table `configcategory`
#

INSERT INTO configcategory VALUES (1,'_MD_AM_GENERAL', 0);
INSERT INTO configcategory VALUES (3,'_MD_AM_META_KEYWORDS', 0);
INSERT INTO configcategory VALUES (4,'_MD_AM_CENSOR', 0);
INSERT INTO configcategory VALUES (5,'_MD_AM_SEARCH', 0);
INSERT INTO configcategory VALUES (6,'_MD_AM_MAILER', 0);

#
# Dumping data for table `configoption`
#

INSERT INTO configoption VALUES (1,'_MD_AM_DEBUGMODE1','1', 13);
INSERT INTO configoption VALUES (2,'_MD_AM_DEBUGMODE2','2', 13);
INSERT INTO configoption VALUES (3,'_NESTED','nest', 32);
INSERT INTO configoption VALUES (4,'_FLAT','flat', 32);
INSERT INTO configoption VALUES (5,'_THREADED','thread', 32);
INSERT INTO configoption VALUES (6,'_OLDESTFIRST','0', 33);
INSERT INTO configoption VALUES (7,'_NEWESTFIRST','1', 33);
INSERT INTO configoption VALUES (14,'_MD_AM_DEBUGMODE3','3', 13);
INSERT INTO configoption VALUES (23,'_MD_AM_DEBUGMODE0','0', 13);
INSERT INTO configoption VALUES (24,'PHP mail()','mail',64);
INSERT INTO configoption VALUES (25,'sendmail','sendmail',64);
INSERT INTO configoption VALUES (26,'SMTP','smtp',64);
INSERT INTO configoption VALUES (27,'SMTPAuth','smtpauth',64);
INSERT INTO configoption VALUES (28,'_MI_XCORE_ROBOT_INDEXFOLLOW','index,follow', 76);
INSERT INTO configoption VALUES (29,'_MI_XCORE_ROBOT_NOINDEXFOLLOW','noindex,follow', 76);
INSERT INTO configoption VALUES (30,'_MI_XCORE_ROBOT_INDEXNOFOLLOW','index,nofollow', 76);
INSERT INTO configoption VALUES (31,'_MI_XCORE_ROBOT_NOINDEXNOFOLLOW','noindex,nofollow', 76);
INSERT INTO configoption VALUES (32,'_MI_XCORE_ROBOT_METAOGEN','general', 77);
INSERT INTO configoption VALUES (33,'_MI_XCORE_ROBOT_METAO14YEARS','14 years', 77);
INSERT INTO configoption VALUES (34,'_MI_XCORE_ROBOT_METAOREST','restricted', 77);
INSERT INTO configoption VALUES (35,'_MI_XCORE_ROBOT_METAOMAT','mature', 77);

#
# Dumping data for table `groups`
#

INSERT INTO `groups` (`groupid`, `name`, `description`, `group_type`) VALUES (1,'サイト管理者','サイト管理者グループ','Admin');
INSERT INTO `groups` (`groupid`, `name`, `description`, `group_type`) VALUES (2,'登録ユーザ','登録ユーザグループ','User');
INSERT INTO `groups` (`groupid`, `name`, `description`, `group_type`) VALUES (3,'ゲスト','ゲストユーザグループ','Anonymous');

#
# Dumping data for table `groups_users_link`
#

INSERT INTO `groups_users_link` (`linkid`, `groupid`, `uid`) VALUES (1,1,1);
INSERT INTO `groups_users_link` (`linkid`, `groupid`, `uid`) VALUES (2,2,1);

#
# Dumping data for table `imgset`
#

INSERT INTO imgset VALUES (1,'default', 0);

#
# Dumping data for table `imgset_tplset_link`
#

INSERT INTO imgset_tplset_link VALUES (1,'default');

#
# Dumping data for table `tplset`
#

INSERT INTO `tplset` (`tplset_id`, `tplset_name`, `tplset_desc`, `tplset_credits`, `tplset_created`) VALUES (1,'default','XOOPS Cube Default Template Set','',1353120994);


#
# Dumping data for table `newblocks`
#

INSERT INTO `newblocks` (`bid`, `mid`, `func_num`, `options`, `name`, `title`, `content`, `side`, `weight`, `visible`, `block_type`, `c_type`, `isactive`, `dirname`, `func_file`, `show_func`, `edit_func`, `template`, `bcachetime`, `last_modified`) VALUES
(1, 0, 0, '', 'カスタム(顔アイコン無効)', 'ようこそ、momoxoへ！', 'momoxoをインストールしていただきありがとうございます。\r\n\r\nmomoxoはXOOPS Cubeのディストリビューションで\r\n\r\nmo もっと ＋ mo もっと ＋ xo XOOPSを！\r\n\r\nを実現するために活動しています。\r\n\r\nnote:このカスタムブロックはサンプルです。内容や設定を変えたり、アンインストールしてあなたのサイトに最適な内容にすることが出来ます。\r\n\r\n-----------------------------\r\n☆デフォルト設定\r\n並び順：0\r\n表示サイド：中央ブロック-中央\r\nタイプ：自動フォーマット顔アイコン無効\r\n表示先のモジュール：トップページ\r\nアクセス権のあるグループ：サイト管理者、登録ユーザ、ゲスト\r\n-----------------------------', 5, 0, 1, 'C', 'T', 1, '', '', '', '', '', 0, 1353874792),
(2, 0, 0, '', 'カスタム(PHP)', 'ログインしているあなたの情報', 'global $xoopsUser;\r\n\r\nif(isset($xoopsUser)){\r\n     echo ''uid:''.$xoopsUser->getVar(''uid'');\r\n     echo ''<br />name:''.$xoopsUser->getVar(''name'');\r\n     echo ''<br />uname:''.$xoopsUser->getVar(''uname'');\r\n} else {\r\n     echo ''あなたはゲストです'';\r\n}\r\n\r\n\r\n\r\n?>\r\n<div style="margin-top:10px;margin-bottom:10px">\r\nnote:このカスタムブロックはサンプルです。内容や設定を変えたり、アンインストールしてあなたのサイトに最適な内容にすることが出来ます。\r\n</div>\r\n\r\n<pre style="line-height:1.4em;">\r\n-----------------------------\r\n☆デフォルト設定\r\n並び順：10\r\n表示サイド：中央ブロック-左\r\nタイプ：PHPスクリプト\r\n表示先のモジュール：トップページ\r\nアクセス権のあるグループ：サイト管理者、登録ユーザ、ゲスト\r\n-----------------------------\r\n</pre>\r\n', 3, 10, 1, 'C', 'P', 1, '', '', '', '', '', 0, 1353878174),
(3, 0, 0, '', 'カスタム(HTML)', 'HTMLサンプル', '<div style="margin-top:10px;border:1px #f00 dotted;padding:5px;background:#CCFFFF;">\r\n<div style="text-align:center;"><a href="{X_SITEURL}edituser.php">アカウント編集</a></div>\r\n<div style="font-size:0.7em;text-align:right;">＊ゲストの場合はTOPに戻ります</div>\r\n</div>\r\n\r\n\r\n\r\n<div style="margin-top:10px;margin-bottom:10px">\r\nnote:このカスタムブロックはサンプルです。内容や設定を変えたり、アンインストールしてあなたのサイトに最適な内容にすることが出来ます。\r\n</div>\r\n\r\n<pre style="line-height:1.4em;">\r\n-----------------------------\r\n☆デフォルト設定\r\n並び順：20\r\n表示サイド：中央ブロック-右\r\nタイプ：HTMLタグ\r\n表示先のモジュール：トップページ\r\nアクセス権のあるグループ：サイト管理者、登録ユーザ、ゲスト\r\n-----------------------------\r\n</pre>', 4, 20, 1, 'C', 'H', 1, '', '', '', '', '', 0, 1353878929);

#
# Dumping data for table `block_module_link`
#

INSERT INTO `block_module_link` (`block_id`, `module_id`) VALUES
(3, -1),
(2, -1),
(1, -1);

INSERT INTO `group_permission` (`gperm_groupid`, `gperm_itemid`, `gperm_modid`, `gperm_name`) VALUES
(1, 1, 1, 'block_read'),
(2, 1, 1, 'block_read'),
(3, 1, 1, 'block_read'),
(1, 2, 1, 'block_read'),
(2, 2, 1, 'block_read'),
(3, 2, 1, 'block_read'),
(1, 3, 1, 'block_read'),
(2, 3, 1, 'block_read'),
(3, 3, 1, 'block_read');

INSERT INTO ranks VALUES (1, '新米', 0, 20, 0, 'rank3e632f95e81ca.gif');
INSERT INTO ranks VALUES (2, '半人前', 21, 40, 0, 'rank3dbf8e94a6f72.gif');
INSERT INTO ranks VALUES (3, '常連', 41, 70, 0, 'rank3dbf8e9e7d88d.gif');
INSERT INTO ranks VALUES (4, '一人前', 71, 150, 0, 'rank3dbf8ea81e642.gif');
INSERT INTO ranks VALUES (5, '長老', 151, 10000, 0, 'rank3dbf8eb1a72e7.gif');
INSERT INTO ranks VALUES (6, 'モデレータ', 0, 0, 1, 'rank3dbf8edf15093.gif');
INSERT INTO ranks VALUES (7, '管理人', 0, 0, 1, 'rank3dbf8ee8681cd.gif');

INSERT INTO smiles VALUES (1, ':-D', 'smil3dbd4d4e4c4f2.gif', 'ニッ', 1);
INSERT INTO smiles VALUES (2, ':-)', 'smil3dbd4d6422f04.gif', 'にっこり', 1);
INSERT INTO smiles VALUES (3, ':-(', 'smil3dbd4d75edb5e.gif', 'シュン', 1);
INSERT INTO smiles VALUES (4, ':-o', 'smil3dbd4d8676346.gif', 'エッ!?', 1);
INSERT INTO smiles VALUES (5, ':-?', 'smil3dbd4d99c6eaa.gif', 'ん？', 1);
INSERT INTO smiles VALUES (6, '8-)', 'smil3dbd4daabd491.gif', 'フフッ', 1);
INSERT INTO smiles VALUES (7, ':lol:', 'smil3dbd4dbc14f3f.gif', 'げらげら', 1);
INSERT INTO smiles VALUES (8, ':-x', 'smil3dbd4dcd7b9f4.gif', 'むぅ', 1);
INSERT INTO smiles VALUES (9, ':-P', 'smil3dbd4ddd6835f.gif', 'べー', 1);
INSERT INTO smiles VALUES (10, ':oops:', 'smil3dbd4df1944ee.gif', 'はー', 0);
INSERT INTO smiles VALUES (11, ':cry:', 'smil3dbd4e02c5440.gif', 'しくしく', 0);
INSERT INTO smiles VALUES (12, ':evil:', 'smil3dbd4e1748cc9.gif', 'カーッ', 0);
INSERT INTO smiles VALUES (13, ':roll:', 'smil3dbd4e29bbcc7.gif', 'ふんふん', 0);
INSERT INTO smiles VALUES (14, ';-)', 'smil3dbd4e398ff7b.gif', 'ウィンク', 0);
INSERT INTO smiles VALUES (15, ':pint:', 'smil3dbd4e4c2e742.gif', 'もう１杯', 0);
INSERT INTO smiles VALUES (16, ':hammer:', 'smil3dbd4e5e7563a.gif', 'こらこら', 0);
INSERT INTO smiles VALUES (17, ':idea:', 'smil3dbd4e7853679.gif', 'これだっ！', 0);
