<?php
// $Id: user.php,v 1.2 2008/08/30 08:52:33 minahito Exp $
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','Nejste registrovan�m u�ivatelem?  Zaregistrujte se <a href="register.php">zde</a>.');
define('_US_LOSTPASSWORD','Ztratili jste sv� heslo?');
define('_US_NOPROBLEM','Nevad�, jen zadejte svou emailovou adresu, kterou jste zadali p�i registraci.');
define('_US_YOUREMAIL','V� email: ');
define('_US_SENDPASSWORD','Zaslat heslo');
define('_US_LOGGEDOUT','Jste odhl�eni');
define('_US_THANKYOUFORVISIT','D�kujeme za Va�i n�v�t�vu!');
define('_US_INCORRECTLOGIN','P�ihl�en� se nezda�ilo!');
define('_US_LOGGINGU','U�ivatel %s.<br />V�tejte!');

// 2001-11-17 ADD
define('_US_NOACTTPADM','Tento u�ivatel je�t� nebyl aktivov�n nebo byl deaktivov�n.<br />Pros�me, spojte se s administr�torem tohoto serveru.');
define('_US_ACTKEYNOT','�patn� aktiva�n� kl��!');
define('_US_ACONTACT','Vybran� u�ivatel ji� byl aktivov�n!');
define('_US_ACTLOGIN','V� ��et byl aktivov�n. Nyn� se m��ete p�ihl�sit.');
define('_US_NOPERMISS','Nem�te opr�vn�n� k proveden� t�to akce!');
define('_US_SURETODEL','Opravdu chcete smazat V� ��et?');
define('_US_REMOVEINFO','T�mto budou z na�� datab�ze odstran�ny ve�ker� informace o V�s.');
define('_US_BEENDELED','V� ��et byl smaz�n.');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','U�ivatelsk� registrace');
define('_US_NICKNAME','U�ivatel');
define('_US_EMAIL','Email');
define('_US_ALLOWVIEWEMAIL','Ostatn� u�ivatel� uvid� m�j email');
define('_US_WEBSITE','WWW');
define('_US_TIMEZONE','�asov� z�na');
define('_US_AVATAR','Ikona');
define('_US_VERIFYPASS','Kontrola hesla');
define('_US_SUBMIT','Potvrdit');
define('_US_USERNAME','U�ivatel');
define('_US_FINISH','Dokon�it');
define('_US_REGISTERNG','Nelze registrovat nov� u�ivatele.');
define('_US_MAILOK','P�ij�mat ob�asn� ozn�men� emailem <br />od administr�tor� nebo moder�tor�?');
define('_US_DISCLAIMER','Prohl�en�');
define('_US_IAGREE','Souhlas�m z v��e uveden�m');
define('_US_UNEEDAGREE', 'Omlouv�me se, ale mus�te odsouhlasit na�e prohl�en�, jinak se nelze registrovat.');
define('_US_NOREGISTER','Omlouv�me se, ale web je nyn� zav�en pro nov� registrace u�ivatel�.');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','Aktiva�n� kl�� pro u�ivatele %s');

define('_US_YOURREGISTERED','Nyn� jste registrov�ni. Byl V�m odesl�n email, obsahuj�c� aktiva�n� kl��. Postupujte pros�m podle instrukc� v t�to zpr�v�.');
define('_US_YOURREGMAILNG','Nyn� jste registrov�ni. Bohu�el se nepoda�ilo odeslat aktiva�n� email na V�mi zadanou adresu z d�vodu probl�m� na na�em serveru. Omlouv�me se za tuto komplikaci a pros�me V�s o upozorn�n� na�eho administr�tora sereru na tuto situaci. D�kujeme za pochopen�.');
define('_US_YOURREGISTERED2','Nyn� jste registrov�ni. Vy�kejte pros�m na aktivaci Va�eho ��tu administr�torem. Budete o tom informov�ni emailem. Budeme se sna�it co nejd��ve.');

// %s is your site name
define('_US_NEWUSERREGAT','Registrace u�ivatele na %s');
// %s is a username
define('_US_HASJUSTREG','%s byl pr�v� registrov�n!');

define('_US_INVALIDMAIL','CHYBA: Neplatn� email');
define('_US_EMAILNOSPACES','CHYBA: Email nesm� obsahovat mezery.');
define('_US_INVALIDNICKNAME','CHYBA: Neplatn� u�ivatelsk� jm�no');
define('_US_NICKNAMETOOLONG','U�ivatelsk� jm�no je p��li� dlouh�. Mus� b�t krat�� ne� %s znak�.');
define('_US_NICKNAMETOOSHORT','U�ivatelsk� jm�no je p��li� kr�tk�. Mus� b�t del�� ne� %s znak�.');
define('_US_NAMERESERVED','CHYBA: Jm�no je rezervov�no.');
define('_US_NICKNAMENOSPACES','Ve jm�nu nesm� b�t ��dn� mezery.');
define('_US_NICKNAMETAKEN','CHYBA: U�ivatelsk� jm�no je ji� obsazeno.');
define('_US_EMAILTAKEN','CHYBA: Emailov� adresa je ji� registrov�na.');
define('_US_ENTERPWD','CHYBA: Mus�te si zvolit heslo.');
define('_US_SORRYNOTFOUND','Omlouv�me se, odpov�daj�c� info o u�ivateli nebylo nalezeno.');




// %s is your site name
define('_US_NEWPWDREQ','Po�adavek na nov� heslo na %s');
define('_US_YOURACCOUNT', 'V� ��et na %s');

define('_US_MAILPWDNG','mail_password: nelze aktualizovat u�ivatelsk� data. Spojte se se spr�vcem');

// %s is a username
define('_US_PWDMAILED','Heslo pro u�ivatele %s bylo odesl�no.');
define('_US_CONFMAIL','Potvrzovac� zpr�va pro u�ivatele %s byla odesl�na.');
define('_US_ACTVMAILNG', 'Selhalo odesl�n� upozorn�n� pro %s.');
define('_US_ACTVMAILOK', 'Upozorn�n� pro u�ivatele %s bylo odesl�no.');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Nebyl vybr�n ��dn� u�ivatel! Jd�te zp�t a zkuste znovu.');
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','Windows Live ID');
define('_US_LOCATION','M�sto');
define('_US_OCCUPATION','Zam�stn�n�');
define('_US_INTEREST','Z�jmy');
define('_US_SIGNATURE','Podpis');
define('_US_EXTRAINFO','Dopln�n�');
define('_US_EDITPROFILE','Upravit ��et');
define('_US_LOGOUT','Odhl�sit');
define('_US_INBOX','P�ijat� zpr�vy');
define('_US_MEMBERSINCE','�lenem od');
define('_US_RANK','Za�azen�');
define('_US_POSTS','Koment��e/P��sp�vky');
define('_US_LASTLOGIN','Posledn� p�ihl�en�');
define('_US_ALLABOUT','V�e o u�ivateli %s');
define('_US_STATISTICS','Statistika');
define('_US_MYINFO','Moje info');
define('_US_BASICINFO','Z�kladn� informace');
define('_US_MOREABOUT','V�ce o m�');
define('_US_SHOWALL','Zobrazit v�e');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Profil');
define('_US_REALNAME','Prav� jm�no');
define('_US_SHOWSIG','V�dy p�ipojit m�j podpis');
define('_US_CDISPLAYMODE','Zp�sob zobrazen� koment���');
define('_US_CSORTORDER','�azen� koment���');
define('_US_PASSWORD','Heslo');
define('_US_TYPEPASSTWICE','(pro zm�nu vypl�te heslo dvakr�t)');
define('_US_SAVECHANGES','Ulo�it zm�ny');
define('_US_NOEDITRIGHT',"Promi�te, ale nem�te pr�va pro editaci tohoto u�ivatele.");
define('_US_PASSNOTSAME','Zadan� hesla nejsou shodn�.');
define('_US_PWDTOOSHORT','Promi�te, Va�e heslo mus� b�t nejm�n� <b>%s</b> znak� dlouh�.');
define('_US_PROFUPDATED','V� profil byl aktualizov�n!');
define('_US_USECOOKIE','Ulo�it Va�e u�ivatelsk� jm�no do cookies ve va�em po��ta�i na dobu jednoho roku.');
define('_US_NO','Ne');
define('_US_DELACCOUNT','Smazat ��et');
define('_US_MYAVATAR', 'Moje ikona');
define('_US_UPLOADMYAVATAR', 'Nahr�t vlastn� ikonu');
define('_US_MAXPIXEL','Max. pixel�');
define('_US_MAXIMGSZ','Max. velikost ikony (Byt�)');
define('_US_SELFILE','Vybrat soubor');
define('_US_OLDDELETED','Va�e star� ikona byla smaz�na!');
define('_US_CHOOSEAVT', 'Vyberte si ikonu se seznamu');

define('_US_PRESSLOGIN', 'Zvolte tla��tko n�e pro p�ihl�en�');

define('_US_ADMINNO', 'Ve skupin� <b>Webmaster</b> mus� z�stat alespo� jeden u�ivatel');
define('_US_GROUPS', 'Skupiny u�ivatele');
?>
