<?php
// $Id: notification.php,v 1.1 2008/07/05 08:25:21 minahito Exp $

// RMV-NOTIFY

// Text for various templates...

define ('_NOT_NOTIFICATIONOPTIONS', 'Mo�nosti upozor�ov�n�');
define ('_NOT_UPDATENOW', 'Aktualizovat');
define ('_NOT_UPDATEOPTIONS', 'Aktualizovat mo�nosti upozor�ov�n�');

define ('_NOT_CANCEL', 'Storno');
define ('_NOT_CLEAR', 'Vy�istit');
define ('_NOT_DELETE', 'Smazat');
define ('_NOT_CHECKALL', 'Zkontrolovat v�e');
define ('_NOT_MODULE', 'Modul');
define ('_NOT_CATEGORY', 'Kategorie');
define ('_NOT_ITEMID', 'ID');
define ('_NOT_ITEMNAME', 'Jm�no');
define ('_NOT_EVENT', 'Ud�lost');
define ('_NOT_EVENTS', 'Ud�losti');
define ('_NOT_ACTIVENOTIFICATIONS', 'Aktivn� upozor�ov�n�');
define ('_NOT_NAMENOTAVAILABLE', 'Jm�no nen� zad�no');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define ('_NOT_ITEMNAMENOTAVAILABLE', 'Nen� n�zev polo�ky');
define ('_NOT_ITEMTYPENOTAVAILABLE', 'Nen� typ polo�ky');
define ('_NOT_ITEMURLNOTAVAILABLE', 'Nen� URL polo�ky');
define ('_NOT_DELETINGNOTIFICATIONS', 'Ma�u upozorn�n�');
define ('_NOT_DELETESUCCESS', 'Upozorn�n� smaz�no.');
define ('_NOT_UPDATEOK', 'Mo�nosti upozorn��ov�n� aktualizov�ny');
define ('_NOT_NOTIFICATIONMETHODIS', 'Zp�sob upozorn�n� je');
define ('_NOT_EMAIL', 'email');
define ('_NOT_PM', 'soukrom� zpr�va');
define ('_NOT_DISABLE', 'zak�z�no');
define ('_NOT_CHANGE', 'Zm�nit');
define ('_NOT_RUSUREDEL', 'Opravdu chcete smazat tato upozorn�n�');
define ('_NOT_NOACCESS', 'Nem�te opr�vn�n� pro vstup na tuto str�nku.');

// Text for module config options

define ('_NOT_ENABLE', 'Povolit');
define ('_NOT_NOTIFICATION', 'Upozorn�n�');

define ('_NOT_CONFIG_ENABLED', 'Povolit upozorn�n�');
define ('_NOT_CONFIG_ENABLEDDSC', 'Tento modul umo�uje u�ivatel�m v�b�r upozorn�n� na ur�it� ud�losti. Zvolte \"Ano\" pro povolen� t�t� vlastnosti.');

define ('_NOT_CONFIG_EVENTS', 'Povolit speci�ln� upozor�ov�n�');
define ('_NOT_CONFIG_EVENTSDSC', 'Vyberte ud�lost, na kterou chcete b�t upozorn�ni.');

define ('_NOT_CONFIG_ENABLE', 'Povolit upozorn�n�');
define ('_NOT_CONFIG_ENABLEDSC', 'Tento modul umo�uje u�ivatel�m v�b�r upozorn�n� na ur�it� ud�losti. Vyberte, jak bude u�ivatel upozorn�n (Block-style), (Inline-style), nebo oboj�. Pro block-style upozorn�n�, je t�eba, aby byl povolen blok pro tento modul.');
define ('_NOT_CONFIG_DISABLE', 'Zak�zat upozorn�n�');
define ('_NOT_CONFIG_ENABLEBLOCK', 'Povolit pouze styl Bloku');
define ('_NOT_CONFIG_ENABLEINLINE', 'Povolit pouze Inline-style');
define ('_NOT_CONFIG_ENABLEBOTH', 'Povolit upozor�ov�n� (oba styly)');

// For notification about comment events

define ('_NOT_COMMENT_NOTIFY', 'P�id�n� koment��e');
define ('_NOT_COMMENT_NOTIFYCAP', 'Upozornit m�, je-li p�id�n nov� koment�� pro tuto polo�ku.');
define ('_NOT_COMMENT_NOTIFYDSC', 'Zaslat upozorn�n�, kdy� bude p�id�n �i schv�len nov� koment�� k t�to polo�ce.');
define ('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatick� upozorn�n�: P�id�n� koment��e k {X_ITEM_TYPE}');

define ('_NOT_COMMENTSUBMIT_NOTIFY', 'Vlo�en� koment��e');
define ('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'Upozornit m�, je-li vlo�en (�ek� na schv�len�) nov� koment�� pro tuto polo�ku.');
define ('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'Zaslat upozorn�n�, kdy� bude vlo�en (�ek� na schv�len�) nov� koment�� k t�to polo�ce.');
define ('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatick� upozorn�n�: Vlo�en� koment��e (�ek� na schv�len�) k {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define ('_NOT_BOOKMARK_NOTIFY', 'Z�lo�ka');
define ('_NOT_BOOKMARK_NOTIFYCAP', 'Ozna�it tuto polo�ku (bez upozorn�n�).');
define ('_NOT_BOOKMARK_NOTIFYDSC', 'Sledovat tuto polo�ku bez zas�l�n� ozn�men� p�i zm�n�.');

// For user profile
// FIXME: These should be reworded a little...

define ('_NOT_NOTIFYMETHOD', 'Zp�sob upozorn�n�: Kdy� nap��klad sledujete f�rum, jak chcete b�t informov�ni o zm�n�ch a nov�ch p��sp�vc�ch?');
define ('_NOT_METHOD_EMAIL', 'Email (pou�ije se adresa z profilu)');
define ('_NOT_METHOD_PM', 'Soukrom� zpr�va');
define ('_NOT_METHOD_DISABLE', 'Do�asn� zak�zat');

define ('_NOT_NOTIFYMODE', 'V�choz� zp�sob upozorn�n�');
define ('_NOT_MODE_SENDALWAYS', 'Upozornit m� na ka�dou zm�nu zvl᚝');
define ('_NOT_MODE_SENDONCE', 'Upozornit m� pouze jednou');
define ('_NOT_MODE_SENDONCEPERLOGIN', 'Zak�zat m� upozor�ovat pouze do p��t�ho p�ihl�en�');

?>
