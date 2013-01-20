<?php
// $Id: global.php,v 1.1 2008/07/05 08:25:13 minahito Exp $

define('_TOKEN_ERROR', 'Varov�n� ! Toto je prevence p�ed p��padn�mi poruchami �i po�kozen�mi. Pros�m, znovu potvr�te!');
define('_SYSTEM_MODULE_ERROR', 'N�sleduj�c� moduly nejsou nainstalov�ny.');
define('_INSTALL','Nainstalovat');
define('_UNINSTALL','Odinstalovat');
define('_SYS_MODULE_UNINSTALLED','Povinn� (nen� instalov�n)');
define('_SYS_MODULE_DISABLED','Povinn� (Vypnut)');
define('_SYS_RECOMMENDED_MODULES','Doporu�en� modul');
define('_SYS_OPTION_MODULES','Voliteln� modul');
define('_UNINSTALL_CONFIRM','P�ejete si odinstalovat syst�mov� modul?');

//%%%%%%	File Name mainfile.php 	%%%%%
define("_PLEASEWAIT","�ekejte pros�m");
define("_FETCHING","Nahr�v�m...");
define("_TAKINGBACK","Zp�t na p�edchoz� str�nku....");
define("_LOGOUT","Odhl�sit");
define("_SUBJECT","P�edm�t");
define("_MESSAGEICON","Ikona");
define("_COMMENTS","Koment��e");
define("_POSTANON","Poslat anonymn�");
define("_DISABLESMILEY","Zak�zat smajl�ky");
define("_DISABLEHTML","Zak�zat HTML");
define("_PREVIEW","N�hled");

define("_GO","Ulo�it");
define("_NESTED","Vlo�en�");
define("_NOCOMMENTS","Nejsou koment��e");
define("_FLAT","Ploch�");
define("_THREADED","Strom");
define("_OLDESTFIRST","Star�� d��ve");
define("_NEWESTFIRST","Nov�j�� d��ve");
define("_MORE","v�ce...");
define("_MULTIPAGE","Aby byl V� �l�nek rozlo�en na v�ce str�nek, vlo�te na p��slu�n� m�sto <b><font color=red>[pagebreak]</font></b> (v�etn� hranat�ch z�vorek).");
define("_IFNOTRELOAD","Pokud nebudete automaticky p�esm�rov�ni b�hem n�kolika sekund,<br />klikn�te pros�m <a href='%s'>zde</a>");
define("_WARNINSTALL2","POZOR: Adres�� <b>%s</b> je�t� existuje na va�em serveru. <br />Z bezpe�nostn�ch d�vod� doporu�ujeme jej smazat.");
define("_WARNINWRITEABLE","POZOR: Soubor %s je p��stupn� pro z�pis serverem. Zm��te pr�va p��stupu k tomuto souboru. na Unixu (444), na Win32 (read-only)");
define('_WARNPHPENV','POZOR: Parametr v php.ini "%s" je nastaven na "%s". %s');
define('_WARNSECURITY','(M��e to b�t bezpe�nostn� probl�m)');

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","Profil");
define("_POSTEDBY","Zasl�no od");
define("_VISITWEBSITE","Nav�t�vit str�nku");
define("_SENDPMTO","Poslat soukromou zpr�vu pro %s");
define("_SENDEMAILTO","Poslat email pro %s");
define("_ADD","P�idat");
define("_REPLY","Odpov��");
define("_DATE","Datum");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","Hlavn�");
define("_MANUAL","Manu�l");
define("_INFO","Info");
define("_CPHOME","Panel administrace");
define("_YOURHOME","Hlavn� str�nka");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","Kdo je p��tomen");
define('_GUESTS', 'N�v�t�vn�ci');
define('_MEMBERS', 'Reg. u�ivatel�');
define("_ONLINEPHRASE","U�ivatel� online: <b>%s</b><br />");
define("_ONLINEPHRASEX","<b>%s</b> v sekci <b>%s</b>");
define("_CLOSE","Zav��t");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","Cituji:");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","Nejste opr�vn�ni pro vstup do t�to oblasti.");

//%%%%%		Common Phrases		%%%%%
define("_NO","Ne");
define("_YES","Ano");
define("_EDIT","Upravit");
define("_DELETE","Smazat");
define("_VIEW","Zobrazit");
define("_SUBMIT","Potvrdit");
define("_MODULENOEXIST","Vybran� modul neexistuje!");
define("_ALIGN","Zarovnat");
define("_LEFT","Vlevo");
define("_CENTER","St�ed");
define("_RIGHT","Vpravo");
define("_FORM_ENTER", "Vlo�te %s");
// %s represents file name
define("_MUSTWABLE","Do souboru <b>%s</b> mus� m�t server pr�vo z�pisu!");
// Module info
define('_PREFERENCES', 'Nastaven�');
define("_VERSION", "Verze");
define("_DESCRIPTION", "Popis");
define("_ERRORS", "Chyby");
define("_NONE", "Nic");
define('_ON','dne');
define('_READS','otev�en�');
define('_WELCOMETO','V�tejte na %s');
define('_SEARCH','Hledat');
define('_ALL', 'V�e');
define('_TITLE', 'Titulek');
define('_OPTIONS', 'Mo�nosti');
define('_QUOTE', 'Citace');
define('_LIST', 'Seznam');
define('_LOGIN','P�ihl�en�');
define('_USERNAME','U�ivatel: ');
define('_PASSWORD','Heslo: ');
define("_SELECT","Vybrat");
define("_IMAGE","Obr�zek");
define("_SEND","Odeslat");
define("_CANCEL","Storno");
define("_ASCENDING","Vzestupn� �azen�");
define("_DESCENDING","Sestupn� �azen�");
define('_BACK', 'Zp�t');
define('_NOTITLE', 'Bez titulku');
define('_RETURN_TOP', 'p�ej�t na za��tek str�nky');

/* Image manager */
define('_IMGMANAGER','Spr�vce obr�zk�');
define('_NUMIMAGES', '<b>%s</b> obr�zk�');
define('_ADDIMAGE','P�idat obr�zek');
define('_IMAGENAME','N�zev:');
define('_IMGMAXSIZE','Max. velikost (kb):');
define('_IMGMAXWIDTH','Max. ���ka (pixely):');
define('_IMGMAXHEIGHT','Max. v��ka (pixely):');
define('_IMAGECAT','Kategorie:');
define('_IMAGEFILE','Soubor');
define('_IMGWEIGHT','V�ha ve spr�vci obr�zk�:');
define('_IMGDISPLAY','Zobrazit obr�zek?');
define('_IMAGEMIME','MIME type:');
define('_FAILFETCHIMG', 'Nelze z�skat nahran� soubor %s');
define('_FAILSAVEIMG', 'Selhalo vlo�en� obr�zku %s do datab�ze');
define('_NOCACHE', 'Bez Cache');
define('_CLONE', 'Klonovat');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH", "Za��n� na");
define("_ENDSWITH", "Kon�� na");
define("_MATCHES", "Je rovno");
define("_CONTAINS", "Obsahuje");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","Registrace");

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","VELIKOST");  // font size
define("_FONT","FONT");  // font family
define("_COLOR","BARVA");  // font color
define("_EXAMPLE","N�HLED");
define("_ENTERURL","URL odkazu, kter� chcete p�idat:");
define("_ENTERWEBTITLE","Titulek serveru:");
define("_ENTERIMGURL","URL or�zku.");
define("_ENTERIMGPOS","Pozice obr�zku.");
define("_IMGPOSRORL","'R' nebo 'r' pro 'vpravo', 'L' nebo 'l' pro 'vlevo', nebo nechte pr�zdn�.");
define("_ERRORIMGPOS","CHYBA! Zadejte pozici obr�zku.");
define("_ENTEREMAIL","Zadejte emailovou adresu.");
define("_ENTERCODE","Zadejte XOOPS k�d.");
define("_ENTERQUOTE","Zadejte text, kter� chcete citovat.");
define("_ENTERTEXTBOX","Napi�te text do textov�ho pole.");
define("_ALLOWEDCHAR","Max. po�et znak�: ");
define("_CURRCHAR","Sou�asn� po�et znak�: ");
define("_PLZCOMPLETE","Vypl�te pros�m p�edm�t a text zpr�vy.");
define("_MESSAGETOOLONG","Va�e zpr�va je p��li� dlouh�.");

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 vte�ina');
define('_SECONDS', '%s vte�in');
define('_MINUTE', '1 minuta');
define('_MINUTES', '%s minut');
define('_HOUR', '1 hodina');
define('_HOURS', '%s hodin');
define('_DAY', '1 den');
define('_DAYS', '%s dn�');
define('_WEEK', '1 t�den');
define('_MONTH', '1 m�s�c');

define('_HELP', "N�pov�da");

?>
