<?php
// $Id: install.php,v 1.1 2008/07/05 08:25:13 minahito Exp $
define("_INSTALL_L0","V�t� V�s pr�vodce instalac� pro XOOPS Cube 2.1.1");
define("_INSTALL_L70","Je nezbytn�, aby b�hem instalace byl soubor mainfile.php nastaven pro z�pis serverem (nap�. chmod 777 mainfile.php na UNIX/LINUX serveru nebo na Windowsech nastavte soubor mainfile.php tak, aby nebyl nastaven \"Pouze pro �ten�\"). A� to ud�l�te znovuna�t�te tuto str�nku.");
//define("_INSTALL_L71","Click on the button below to begin the installation.");
define("_INSTALL_L1","Otev�ete soubor mainfile.php ve Va�em textov�m editoru a najd�te n�sleduj�c� k�d na ��dku 31:");
define("_INSTALL_L2","Zm��te tuto ��dku na toto:");
define("_INSTALL_L3","Nyn�, na ��dce 35, zm��te %s na %s");
define("_INSTALL_L4","Hotovo! Nastavil jsem p�edepsan� hodnoty, zkusme to znovu!");
define("_INSTALL_L5","POZOR!");
define("_INSTALL_L6","Existuje jist� rozd�l mezi Va��m nastaven�m XOOPS_ROOT_PATH na ��dce 31 v souboru mainfile.php a t�m, co detekoval instala�n� program.");
define("_INSTALL_L7","Va�e nastaven�: ");
define("_INSTALL_L8","Instala�n� program detekoval: ");
define("_INSTALL_L9","(Na platform�ch Microsoft se ob�as st�v�, �e z�sk�te toto chybov� ozn�men�, a�koliv Va�e nastaven� je spr�vn�. Pokud je to tento p��pad, pros�me, pokra�ujte stiknut�m tla��tka Dal��)");
define("_INSTALL_L10","Pros�me, stiskn�te tla��tko n�e pokud je toto opravdu v po��dku.");
define("_INSTALL_L11","Cesta na serveru do ko�enov�ho adres��e XOOPS Cube: ");
define("_INSTALL_L12","URL do ko�enov�ho adres��e XOOPS Cube: ");
define("_INSTALL_L13","Pokud je toto nastaven� v po��dku, klin�te na tla��tko Dal��.");
define("_INSTALL_L14","Dal��");
define("_INSTALL_L15","Pros�me, otev�ete soubor mainfile.php a vepi�te tam nezbytn� nastaven� datab�ze");
define("_INSTALL_L16","%s je n�zev (nebo adresa) Va�eho datab�zov�ho serveru.");
define("_INSTALL_L17","%s je u�ivatelsk� jm�no pro p��stup do datab�ze.");
define("_INSTALL_L18","%s je heslo nezbytn� pro p��stup do Va�� datab�ze.");
define("_INSTALL_L19","%s je jm�no datab�ze, ve kter� bude XOOPS Cube vytv��et sv� tabulky.");
define("_INSTALL_L20","%s je p�edpona n�zv� tabulek, kter� budou vytvo�eny b�hem instalace.");
define("_INSTALL_L21","N�sleduj�c� datab�ze nebyla na serveru nalezena:");
define("_INSTALL_L22","M� se instala�n� program pokusit ji vytvo�it?");
define("_INSTALL_L23","Ano");
define("_INSTALL_L24","Ne");
define("_INSTALL_L25","Instala�n� program detekoval n�sleduj�c� nastaven� datab�ze ze souboru mainfile.php. Pros�me, p�ekontrolujte je a p��padn� je upravte.");
define("_INSTALL_L26","Nastaven� datab�ze");
define("_INSTALL_L51","Datab�ze");
define("_INSTALL_L66","Vyberte datab�zi, kterou chcete pro Xoops Cube pou��t.");
define("_INSTALL_L27","Datab�zov� server");
define("_INSTALL_L67","Jm�no datab�zov�ho serveru. Pokud si nejste jisti, 'localhost' b�v� standardn�m nastaven�m.");
define("_INSTALL_L28","U�ivatelsk� jm�no");
define("_INSTALL_L65","Va�e u�ivatelsk� jm�no pro p��stup na datab�zov� server do datab�ze.");
define("_INSTALL_L29","Jm�no datab�ze");
define("_INSTALL_L64","Jm�no datab�ze na serveru. Pokud datab�ze neexistuje, instala�n� pr�vodce se ji pokus� vytvo�it.");
define("_INSTALL_L52","Heslo");
define("_INSTALL_L68","Va�e heslo pro p��stup na datab�zov� server do datab�ze.");
define("_INSTALL_L30","Ozna�en� tabulek");
define("_INSTALL_L63","P�edpona (prefix) tabulek kv�li zamezen� konflikt� p�i vytv��en� tabulek pro Xoops Cube. Pokud si nejste jisti, prost� 'xoops' by m�lo fungovat bez pot��.");
define("_INSTALL_L54","Pou��t persistentn� spojen�?");
define("_INSTALL_L69","Standard je 'NE'. Vyberte 'NE' pokud si nejste jisti.");
define("_INSTALL_L55","Fyzick� cesta k XOOPS Cube");
define("_INSTALL_L59","Fyzick� cesta na server ke ko�enov�mu adres��i XOOPS Cube bez lom�tka na konci.");
define("_INSTALL_L56","Virtu�ln� adresa XOOPS Cube (URL)");
define("_INSTALL_L58","Virtu�ln� cesta ke ko�enov�mu adres��i XOOPS Cube bez lom�tka na konci.");

define("_INSTALL_L31","Nepoda�ilo se vytvo�it datab�zi. Kontaktujte administr�tora serveru pro dal�� pomoc.");
define("_INSTALL_L32","Instalace Dokon�ena");
define("_INSTALL_L33","Klikn�t�e <a href='../index.php'>TADY</a> a uvid�te tituln� str�nku Va�eho serveru.");
define("_INSTALL_L35","Pokud jste narazili na n�jak� chyby, pros�me, oznamte to v�vojov�mu t�mu na <a href='http://www.xoopscube.org/' target='_blank'>XOOPSCUBE.org</a>");
define("_INSTALL_L36","Zadejte administr�torsk� jm�no a heslo pro V� XOOPS Cube server.");
define("_INSTALL_L37","Jm�no administr�tora");
define("_INSTALL_L38","Email administr�tora");
define("_INSTALL_L39","Heslo administr�tora");
define("_INSTALL_L74","Znovu heslo");
define("_INSTALL_L40","Vytvo�it tabulky");
define("_INSTALL_L41","Pros�m, vra�te se zp�t a dopi�te ve�ker� pot�ebn� informace.");
define("_INSTALL_L42","Zp�t");
define("_INSTALL_L57","Pros�m zadejte %s");

// %s is database name
define("_INSTALL_L43","Datab�ze %s vytvo�ena!");

// %s is table name
define("_INSTALL_L44","Nepoda�ilo se vytvo�it tabulku %s");
define("_INSTALL_L45","Tabulka %s vytvo�ena.");

define("_INSTALL_L46","Kv�li provtn�mu nastaven� modul� obsa�en�ch v syst�mu XOOPS Cube musej� b�t n�sleduj�c� soubory nastaveny pro z�pis serverem. Je nezbytn�, aby b�hem instalace byl soubor mainfile.php nastaven pro z�pis serverem (nap�. chmod 777 mainfile.php na UNIX/LINUX serveru nebo na Windowsech nastavte soubor mainfile.php tak, aby nebyl nastaven \"Pouze pro �ten�\"). A� to ud�l�te znovuna�t�te tuto str�nku.");
define("_INSTALL_L47","Dal��");

define("_INSTALL_L53","Pros�m, potvr�te tyto vlo�en� �daje:");

define("_INSTALL_L60","Nepoda�ilo se zapsat data do souboru mainfile.php. Pros�me, p�ekontrolujte p��stupov� pr�va, p��p. nastaven� \"Pouze pro �ten�\", a zkuste znovu data ulo�it.");
define("_INSTALL_L61","Nepoda�ilo se zapsat data do souboru mainfile.php. Kontaktujte administr�tora serveru pro dal�� pomoc.");
define("_INSTALL_L62","Nastaven� bylo v po��dku ulo�eno do souboru mainfile.php.");
define("_INSTALL_L72","N�sleduj�c� adres��e musej� b�t vytvo�eny s pr�vem z�pisu serverem. (nap�. 'chmod 777 jmeno_adresare' na UNIX/LINUX serveru)");
define("_INSTALL_L73","Chybn� email");

// add by haruki
define("_INSTALL_L80","�vod");
define("_INSTALL_L81","prov��en� p��stupov�ch pr�v");
define("_INSTALL_L82","Prov��en� p��stupov�ch pr�v k soubor�m a adres���m..");
define("_INSTALL_L83","Soubor %s NEN� nastaven pro z�pis.");
define("_INSTALL_L84","Soubor %s je nastaven pro z�pis.");
define("_INSTALL_L85","Adres�� %s NEN� nastaven pro z�pis.");
define("_INSTALL_L86","Adres�� %s je nastaven pro z�pis.");
define("_INSTALL_L87","��dn� probl�my nebyly zji�t�ny.");
define("_INSTALL_L89","hlavn� nastaven�");
define("_INSTALL_L90","Hlavn� nastaven�");
define("_INSTALL_L91","potvrdit");
define("_INSTALL_L92","ulo�it nastaven�");
define("_INSTALL_L93","upravit nastaven�");
define("_INSTALL_L88","Ukl�d�n� nastaven�..");
define("_INSTALL_L94","prov��en� cesty & URL");
define("_INSTALL_L127","Prov��en� cest a adresy..");
define("_INSTALL_L95","Nepoda�ilo se detekovat fyzickou cestu do Va�eho ko�enov�ho adres��e XOOPS Cube.");
define("_INSTALL_L96","Je ur�it� konfikt mezi detekovanou fyzickou cestou (%s) a tou, kterou jste zadali.");
define("_INSTALL_L97","<b>Fyzick� cesta</b> je v po��dku.");

define("_INSTALL_L99","<b>Fyzick� cesta</b> mus� b�t adres��.");
define("_INSTALL_L100","<b>Virtu�ln� cesta</b> je funk�n� adresa.");
define("_INSTALL_L101","<b>Virtu�ln� cestah</b> nen� spr�vn� adresa.");
define("_INSTALL_L102","Potvrzen� nastaven� datab�ze");
define("_INSTALL_L103","znovu od za��tku");
define("_INSTALL_L104","Prov��en� datab�ze");
define("_INSTALL_L105","pokusit se vytvo�it datab�zi");
define("_INSTALL_L106","Nepoda�ilo se p�ipojit na datab�zov� server.");
define("_INSTALL_L107","Pros�me, zkontrolujte datab�zov� server a jeho nastaven�.");
define("_INSTALL_L108","Spojen� na datab�zov� server je v po��dku.");
define("_INSTALL_L109","Datab�ze %s neexistuje.");
define("_INSTALL_L110","Datab�ze %s existuje a je p�ipravena ke spojen�.");
define("_INSTALL_L111","Spojen� do datab�ze je v po��dku.<br />Klin�te na tla��tko Dal�� pro vytvo�en� tabulek.");
define("_INSTALL_L112","nastaven� administr�torsk�ho ��tu");
define("_INSTALL_L113","Tabulka %s vymaz�na.");
define("_INSTALL_L114","Nepoda�ilo se vytvo�it tabulky v datab�zi.");
define("_INSTALL_L115","Tabulky v datab�zi vytvo�eny.");
define("_INSTALL_L116","vlo�it �daje");
define("_INSTALL_L117","dokon�it");

define("_INSTALL_L118","Nepoda�ilo se vytvo�it tabulku %s.");
define("_INSTALL_L119","%d ��dk� vlo�eno do tabulky %s.");
define("_INSTALL_L120","Nepoda�ilo se vlo�it %d ��dk� do tabulky %s.");

define("_INSTALL_L121","Prom�nn� %s ulo�ena jako %s.");
define("_INSTALL_L122","Nepoda�ilo se ulo�it prom�nnou %s.");

define("_INSTALL_L123","Soubor %s ulo�en do adres��e cache/.");
define("_INSTALL_L124","Nepoda�ilo se ulo�it soubor %s do adres��e cache/.");

define("_INSTALL_L125","Soubor %s p�eps�n souborem %s.");
define("_INSTALL_L126","Nebylo mo�n� zapsat do souboru %s.");

define("_INSTALL_L130","Instala�n� program detekoval v datab�zi tabulky pro XOOPS 1.3.x.<br />Program se nyn� pokus� tyto tabulky adaptovat pro syst�m XOOPS Cube.");
define("_INSTALL_L131","Tabulky pro XOOPS Cube ji� ve Va�� datab�zi existuj�.");
define("_INSTALL_L132","adaptovat tabulky");
define("_INSTALL_L133","Tabulka %s adaptov�na.");
define("_INSTALL_L134","Nepoda�ilo se adaptovat tabulku %s.");
define("_INSTALL_L135","Nepoda�ilo se adaptovat tabulky.");
define("_INSTALL_L136","Tabulky byly adaptov�ny.");
define("_INSTALL_L137","adaptovat moduly");
define("_INSTALL_L138","adaptovat koment��e");
define("_INSTALL_L139","adaptovat ikony");
define("_INSTALL_L140","adaptovat emotikony");
define("_INSTALL_L141","Instala�n� program nyn� p�evede v�echny moduly, aby fungovaly v syst�mu XOOPS Cube.<br />Ujist�te se, �e jste na server nahr�li v�echna data z bal�ku XOOPS Cube.<br />Je mo�n�, �e to chvilku potrv�.");
define("_INSTALL_L142","Adaptov�n� modul�..");
define("_INSTALL_L143","Instala�n� program nyn� p�evede nastaven� z XOOPS 1.3.x do nov�ho XOOPS Cube.");
define("_INSTALL_L144","p�ev�st nastaven�");
define("_INSTALL_L145","Koment�� (ID: %s) vlo�en do datab�ze.");
define("_INSTALL_L146","Nepoda�ilo se vlo�it koment�� (ID: %s) do datab�ze.");
define("_INSTALL_L147","Adaptov�n� koment���..");
define("_INSTALL_L148","P�evod dokon�en.");
define("_INSTALL_L149","Instala�n� program nyn� p�evede koment��e z XOOPS 1.3.x do nov�ho XOOPS Cube.<br />Je mo�n�, �e to chvilku potrv�.");
define("_INSTALL_L150","Instala�n� program nyn� p�evede emotikony a u�ivatelsk� za�azen� do nov�ho XOOPS Cube.<br />Je mo�n�, �e to chvilku potrv�.");
define("_INSTALL_L151","Instala�n� program nyn� p�evede ikony do nov�ho XOOPS Cube.<br />Je mo�n�, �e to chvilku potrv�.");
define("_INSTALL_L155","P�evod emotikon�/obr�zk� u�ivatelsk�ch za�azen�..");
define("_INSTALL_L156","P�evod u�ivatelsk�ch ikon..");
define("_INSTALL_L157","Pro ka�dou skupinu vyberte odpov�daj�c� druh u�ivatelsk� skupiny");
define("_INSTALL_L158","Skupiny v 1.3.x");
define("_INSTALL_L159","Administr�to�i");
define("_INSTALL_L160","Registrovan� u�ivatel�");
define("_INSTALL_L161","Anonymn� u�ivatel�");
define("_INSTALL_L162","Mus�te vybrat pro ka�dou skupinu odpov�daj�c� druh u�ivatelsk� skupiny.");
define("_INSTALL_L163","Tabulky %s odstran�na.");
define("_INSTALL_L164","Nepoda�ilo se odstranit tabulku %s.");
define("_INSTALL_L165","Server je z d�vod� �prav prozat�mn� uzav�en. Pros�me, nav�tivte n�s pozd�ji.");

// %s is filename
define("_INSTALL_L152","Nepoda�ilo se otev��t %s.");
define("_INSTALL_L153","Nepoda�ilo se aktualizovat %s.");
define("_INSTALL_L154","%s aktualizov�n.");

define('_INSTALL_L128', 'Vyberte si jazyk pro pou�it� b�hem instalace');
define('_INSTALL_L200', 'Obnovit');
define("_INSTALL_L210","Druh� krok instalace");


define('_INSTALL_CHARSET','WINDOWS-1250');

define('_INSTALL_LANG_XOOPS_SALT', "DOPLN�N�");
define('_INSTALL_LANG_XOOPS_SALT_DESC', "Toto hraje dopl�kovou roli pro generov�n� tajn�ch k�d� a znak�. V�choz� hodnotu nen� t�eba m�nit.");

define('_INSTALL_HEADER_MESSAGE','B�hem instalace pozorn� �t�te a vypl�ujte po�adovan� �daje.');
?>
