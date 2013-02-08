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
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (87,4,0,'allow_register','_MI_USER_CONF_ALLOW_REGISTER','1','_MI_USER_CONF_ALW_RG_DESC','yesno','int',0);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (88,4,0,'minpass','_MI_USER_CONF_MINPASS','5','','textbox','int',1);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (89,4,0,'minuname','_MI_USER_CONF_MINUNAME','3','','textbox','int',2);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (90,4,0,'maxuname','_MI_USER_CONF_MAXUNAME','10','','textbox','int',3);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (91,4,0,'allow_chgmail','_MI_USER_CONF_CHGMAIL','0','','yesno','int',4);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (92,4,0,'notify_method','XOOPS_NOTIFICATION_METHOD_DISABLE','2','','select','int',5);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (93,4,0,'new_user_notify','_MI_USER_CONF_NEW_USER_NOTIFY','1','','yesno','int',6);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (94,4,0,'new_user_notify_group','_MI_USER_CONF_NEW_NTF_GROUP','4','','group','int',7);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (95,4,0,'activation_type','_MI_USER_CONF_ACTV_TYPE','0','','select','int',8);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (96,4,0,'activation_group','_MI_USER_CONF_ACTV_GROUP','4','_MI_USER_CONF_ACTV_GROUP_DESC','group','int',9);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (97,4,0,'uname_test_level','_MI_USER_CONF_UNAME_TEST_LEVEL','1','','select','int',10);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (98,4,0,'avatar_allow_upload','_MI_USER_CONF_AVTR_ALLOW_UP','0','','yesno','int',11);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (99,4,0,'avatar_minposts','_MI_USER_CONF_AVATAR_MINPOSTS','0','_MI_USER_CONF_AVT_MIN_DESC','textbox','int',12);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (100,4,0,'avatar_width','_MI_USER_CONF_AVATAR_WIDTH','80','','textbox','int',13);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (101,4,0,'avatar_height','_MI_USER_CONF_AVATAR_HEIGHT','80','','textbox','int',14);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (102,4,0,'avatar_maxsize','_MI_USER_CONF_AVATAR_MAXSIZE','35000','','textbox','int',15);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (103,4,0,'self_delete','_MI_USER_CONF_SELF_DELETE','0','','yesno','int',16);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (104,4,0,'self_delete_confirm','_MI_USER_CONF_SELF_DELETE_CONF','ユーザアカウントを本当に削除しても良いですか？\nアカウントを削除した場合、全てのユーザ情報が失われます。','','textarea','string',17);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (105,4,0,'bad_unames','_MI_USER_CONF_BAD_UNAMES','a:3:{i:0;s:9:\"webmaster\";i:1;s:6:\"^xoops\";i:2;s:6:\"^admin\";}','_MI_USER_CONF_BAD_UNAMES_DESC','textarea','array',18);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (106,4,0,'bad_emails','_MI_USER_CONF_BAD_EMAILS','a:2:{i:0;s:13:\"xoopscube.jp$\";i:1;s:14:\"xoopscube.org$\";}','_MI_USER_CONF_BAD_EMAILS_DESC','textarea','array',19);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (107,4,0,'reg_dispdsclmr','_MI_USER_CONF_DISPDSCLMR','0','_MI_USER_CONF_DISPDSCLMR_DESC','yesno','int',20);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (108,4,0,'reg_disclaimer','_MI_USER_CONF_DISCLAIMER','本規約は、当サイトにより提供されるコンテンツの利用条件を定めるものです。以下の利用条件をよくお読みになり、これに同意される場合にのみご登録いただきますようお願いいたします。\n\n当サイトを利用するにあたり、以下に該当する又はその恐れのある行為を行ってはならないものとします。 \n\n・公序良俗に反する行為 \n・法令に違反する行為 \n・犯罪行為及び犯罪行為に結びつく行為 \n・他の利用者、第三者、当サイトの権利を侵害する行為 \n・他の利用者、第三者、当サイトを誹謗、中傷する行為及び名誉・信用を傷つける行為 \n・他の利用者、第三者、当サイトに不利益を与える行為 \n・当サイトの運営を妨害する行為 \n・事実でない情報を発信する行為 \n・プライバシー侵害の恐れのある個人情報の投稿 \n・その他、当サイトが不適当と判断する行為 \n\n【免責】\n\n利用者が当サイト及び当サイトに関連するコンテンツ、リンク先サイトにおける一切のサービス等をご利用されたことに起因または関連して生じた一切の損害（間接的であると直接的であるとを問わない）について、当サイトは責任を負いません。','_MI_USER_CONF_DISCLAIMER_DESC','textarea','string',21);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (109,4,0,'usercookie','_MI_USER_CONF_USERCOOKIE','xoops_user','_MI_USER_CONF_USERCOOKIE_DESC','textbox','string',22);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (110,4,0,'use_ssl','_MI_USER_CONF_USE_SSL','0','','yesno','int',23);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (111,4,0,'sslpost_name','_MI_USER_CONF_SSLPOST_NAME','xoops_ssl','','textbox','string',24);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (112,4,0,'sslloginlink','_MI_USER_CONF_SSLLOGINLINK','https://','','textbox','string',25);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (113,7,0,'adminmenu_hack_ft','_MI_ALTSYS_ADMINMENU_HFT','0','_MI_ALTSYS_ADMINMENU_HFTDSC','select','int',0);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (114,7,0,'adminmenu_insert_mymenu','_MI_ALTSYS_ADMINMENU_IM','0','_MI_ALTSYS_ADMINMENU_IMDSC','yesno','int',1);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (115,7,0,'admin_in_theme','_MI_ALTSYS_ADMIN_IN_THEME','default','_MI_ALTSYS_ADMIN_IN_THEMEDSC','textbox','text',2);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (116,7,0,'enable_force_clone','_MI_ALTSYS_ENABLEFORCECLONE','1','_MI_ALTSYS_ENABLEFORCECLONEDSC','yesno','int',3);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (117,7,0,'images_dir','_MI_ALTSYS_IMAGES_DIR','images','_MI_ALTSYS_IMAGES_DIRDSC','textbox','text',4);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (118,8,0,'temp_path','_MI_XUPDATE_TEMP_PATH','uploads/xupdate','_MI_XUPDATE_TEMP_PATHDSC','text','string',0);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (119,8,0,'ftp_method','_MI_XUPDATE_FTP_METHOD','4','_MI_XUPDATE_FTP_METHODDSC','radio_br','int',1);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (120,8,0,'FTP_SSL','_MI_XUPDATE_FTP_USESSL','0','_MI_XUPDATE_FTP_USESSLDSC','yesno','int',2);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (121,8,0,'FTP_server','_MI_XUPDATE_FTP_SERVER','127.0.0.1','_MI_XUPDATE_FTP_SERVERDSC','text','string',3);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (122,8,0,'FTP_UserName','_MI_XUPDATE_FTP_UNAME','','_MI_XUPDATE_FTP_UNAMEDSC','text','string',4);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (123,8,0,'FTP_password','_MI_XUPDATE_FTP_PASS','','_MI_XUPDATE_FTP_PASSDSC','password','string',5);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (124,8,0,'SSH_port','_MI_XUPDATE_SSH_PORT','22','_MI_XUPDATE_SSH_PORTDSC','text','string',6);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (125,8,0,'SSH_key','_MI_XUPDATE_SSH_KEY','','_MI_XUPDATE_SSH_KEYDSC','textarea','text',7);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (126,8,0,'php_perm','_MI_XUPDATE_PHP_PERM','','_MI_XUPDATE_PHP_PERMDSC','text','string',8);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (127,8,0,'tag_dirname','_MI_XUPDATE_TAG_DIRNAME','','_MI_XUPDATE_TAG_DIRNAMEDSC','server_module','text',9);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (128,8,0,'xelfinder_dirname','_MI_XUPDATE_XEL_DIRNAME','xelfinder','_MI_XUPDATE_XEL_DIRNAMEDSC','text','string',10);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (129,8,0,'Show_debug','_MI_XUPDATE_DEBUG','0','','yesno','int',11);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (130,8,0,'Theme_download_Url_format','_MI_XUPDATE_FTP_THEME_URL','http://cmsthemefinder.com/modules/lica/index.php?controller=download&id=%u','','text','string',12);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (131,8,0,'stores_json_url','_MI_XUPDATE_FTP_STORE_URL','http://xoopscube.net/uploads/xupdatemaster/stores_json_V1.txt','','text','string',13);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (132,9,0,'pagenum','_MI_MESSAGE_PAGENUM','15','_MI_MESSAGE_PAGENUM_DESC','textbox','int',0);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (133,9,0,'savedays','_MI_MESSAGE_SAVEDAYS','90','_MI_MESSAGE_SAVEDAYS_DESC','textbox','int',1);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (134,9,0,'newalert','_MI_MESSAGE_NEWALERT','1','_MI_MESSAGE_NEWALERT_DESC','yesno','int',2);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (135,9,0,'dletype','_MI_MESSAGE_DELTYPE','1','_MI_MESSAGE_DELTYPE_DESC','yesno','int',3);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (136,10,0,'global_disabled','_MI_PROTECTOR_GLOBAL_DISBL','0','_MI_PROTECTOR_GLOBAL_DISBLDSC','yesno','int',0);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (137,10,0,'default_lang','_MI_PROTECTOR_DEFAULT_LANG','ja_utf8','_MI_PROTECTOR_DEFAULT_LANGDSC','text','text',1);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (138,10,0,'log_level','_MI_PROTECTOR_LOG_LEVEL','255','','select','int',2);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (139,10,0,'banip_time0','_MI_PROTECTOR_BANIP_TIME0','86400','','text','int',3);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (140,10,0,'reliable_ips','_MI_PROTECTOR_RELIABLE_IPS','a:2:{i:0;s:9:\"^192.168.\";i:1;s:9:\"127.0.0.1\";}','_MI_PROTECTOR_RELIABLE_IPSDSC','textarea','array',4);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (141,10,0,'session_fixed_topbit','_MI_PROTECTOR_HIJACK_TOPBIT','24','_MI_PROTECTOR_HIJACK_TOPBITDSC','text','int',5);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (142,10,0,'groups_denyipmove','_MI_PROTECTOR_HIJACK_DENYGP','a:1:{i:0;i:1;}','_MI_PROTECTOR_HIJACK_DENYGPDSC','group_multi','array',6);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (143,10,0,'san_nullbyte','_MI_PROTECTOR_SAN_NULLBYTE','1','_MI_PROTECTOR_SAN_NULLBYTEDSC','yesno','int',7);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (144,10,0,'die_badext','_MI_PROTECTOR_DIE_BADEXT','1','_MI_PROTECTOR_DIE_BADEXTDSC','yesno','int',8);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (145,10,0,'contami_action','_MI_PROTECTOR_CONTAMI_ACTION','3','_MI_PROTECTOR_CONTAMI_ACTIONDS','select','int',9);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (146,10,0,'isocom_action','_MI_PROTECTOR_ISOCOM_ACTION','0','_MI_PROTECTOR_ISOCOM_ACTIONDSC','select','int',10);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (147,10,0,'union_action','_MI_PROTECTOR_UNION_ACTION','0','_MI_PROTECTOR_UNION_ACTIONDSC','select','int',11);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (148,10,0,'id_forceintval','_MI_PROTECTOR_ID_INTVAL','0','_MI_PROTECTOR_ID_INTVALDSC','yesno','int',12);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (149,10,0,'file_dotdot','_MI_PROTECTOR_FILE_DOTDOT','1','_MI_PROTECTOR_FILE_DOTDOTDSC','yesno','int',13);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (150,10,0,'bf_count','_MI_PROTECTOR_BF_COUNT','10','_MI_PROTECTOR_BF_COUNTDSC','text','int',14);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (151,10,0,'bwlimit_count','_MI_PROTECTOR_BWLIMIT_COUNT','0','_MI_PROTECTOR_BWLIMIT_COUNTDSC','text','int',15);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (152,10,0,'dos_skipmodules','_MI_PROTECTOR_DOS_SKIPMODS','','_MI_PROTECTOR_DOS_SKIPMODSDSC','text','text',16);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (153,10,0,'dos_expire','_MI_PROTECTOR_DOS_EXPIRE','60','_MI_PROTECTOR_DOS_EXPIREDSC','text','int',17);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (154,10,0,'dos_f5count','_MI_PROTECTOR_DOS_F5COUNT','20','_MI_PROTECTOR_DOS_F5COUNTDSC','text','int',18);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (155,10,0,'dos_f5action','_MI_PROTECTOR_DOS_F5ACTION','exit','','select','text',19);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (156,10,0,'dos_crcount','_MI_PROTECTOR_DOS_CRCOUNT','40','_MI_PROTECTOR_DOS_CRCOUNTDSC','text','int',20);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (157,10,0,'dos_craction','_MI_PROTECTOR_DOS_CRACTION','exit','','select','text',21);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (158,10,0,'dos_crsafe','_MI_PROTECTOR_DOS_CRSAFE','/(msnbot|Googlebot|Yahoo! Slurp)/i','_MI_PROTECTOR_DOS_CRSAFEDSC','text','text',22);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (159,10,0,'bip_except','_MI_PROTECTOR_BIP_EXCEPT','a:1:{i:0;i:1;}','_MI_PROTECTOR_BIP_EXCEPTDSC','group_multi','array',23);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (160,10,0,'disable_features','_MI_PROTECTOR_DISABLES','1','','select','int',24);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (161,10,0,'enable_dblayertrap','_MI_PROTECTOR_DBLAYERTRAP','1','_MI_PROTECTOR_DBLAYERTRAPDSC','yesno','int',25);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (162,10,0,'dblayertrap_wo_server','_MI_PROTECTOR_DBTRAPWOSRV','0','_MI_PROTECTOR_DBTRAPWOSRVDSC','yesno','int',26);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (163,10,0,'enable_bigumbrella','_MI_PROTECTOR_BIGUMBRELLA','1','_MI_PROTECTOR_BIGUMBRELLADSC','yesno','int',27);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (164,10,0,'spamcount_uri4user','_MI_PROTECTOR_SPAMURI4U','0','_MI_PROTECTOR_SPAMURI4UDSC','textbox','int',28);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (165,10,0,'spamcount_uri4guest','_MI_PROTECTOR_SPAMURI4G','5','_MI_PROTECTOR_SPAMURI4GDSC','textbox','int',29);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (166,10,0,'filters','_MI_PROTECTOR_FILTERS','','_MI_PROTECTOR_FILTERSDSC','textarea','text',30);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (167,10,0,'enable_manip_check','_MI_PROTECTOR_MANIPUCHECK','1','_MI_PROTECTOR_MANIPUCHECKDSC','yesno','int',31);
INSERT INTO `config` (`conf_id`, `conf_modid`, `conf_catid`, `conf_name`, `conf_title`, `conf_value`, `conf_desc`, `conf_formtype`, `conf_valuetype`, `conf_order`) VALUES (168,10,0,'manip_value','_MI_PROTECTOR_MANIPUVALUE','','_MI_PROTECTOR_MANIPUVALUEDSC','textbox','text',32);


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
