<?php
// $Id$

//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','Pas encore membre ? Cliquez <a href=register.php>ici</a>.');
define('_US_LOSTPASSWORD','Perdu votre mot de passe ?');
define('_US_NOPROBLEM',"Pas de probl�me. Entrez simplement l'adresse e-mail que vous avez fournie pour votre compte.");
define('_US_YOUREMAIL','Votre E-mail :&nbsp;');
define('_US_SENDPASSWORD','Envoyer le mot de passe');
define('_US_LOGGEDOUT','Vous �tes maintenant d�connect�(e)');
define('_US_THANKYOUFORVISIT',"Merci de votre visite sur notre site !");
define('_US_INCORRECTLOGIN','Indentifiant incorrect !');
define('_US_LOGGINGU','Merci pour votre connexion, %s.');

// 2001-11-17 ADD
define('_US_NOACTTPADM',"L'utilisateur s�lectionn� a �t� d�sactiv� ou n'a pas encore �t� activ�.<br />Merci de contacter l'administrateur pour des d�tails.");
define('_US_ACTKEYNOT',"Cl� d'activation incorrecte !");
define('_US_ACONTACT','Le compte s�lectionn� est d�j� activ� !');
define('_US_ACTLOGIN','Votre compte a �t� activ�. Merci de vous connecter avec le mot de passe enregistr�.');
define('_US_NOPERMISS',"D�sol�, vous n'avez pas la permission de faire cette action !");
define('_US_SURETODEL','Etes-vous s�r de vouloir supprimer votre compte ?');
define('_US_REMOVEINFO','Ceci va supprimer toutes vos informations de notre base de donn�es.');
define('_US_BEENDELED','Votre compte a �t� supprim�.');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Enregistrement Membre');
define('_US_NICKNAME','Pseudo');
define('_US_EMAIL','E-mail');
define('_US_ALLOWVIEWEMAIL','Autoriser les autres utilisateurs � voir mon adresse e-mail');
define('_US_WEBSITE','Site Web');
define('_US_TIMEZONE','Fuseau horaire');
define('_US_AVATAR','Avatar');
define('_US_VERIFYPASS','V�rifier le mot de passe');
define('_US_SUBMIT','Valider');
define('_US_USERNAME','Pseudo');
define('_US_FINISH','Terminer');
define('_US_REGISTERNG',"Impossible d'enregistrer un nouveau membre.");
define('_US_MAILOK',"Autoriser les administrateurs du site et<br /> les mod�rateurs � m'envoyer occasionnellement des avis par e-mail ?");
define('_US_DISCLAIMER','Mise en garde');
define('_US_IAGREE',"J'accepte la mise en garde ci-dessus");
define('_US_UNEEDAGREE', "D�sol�, vous n'avez pas accept� notre mise en garde pour l'inscription.");
define('_US_NOREGISTER','D�sol�, nous avons actuellement ferm� les nouvelles inscriptions');


// %s is username. This is a subject for email
define('_US_USERKEYFOR',"Cl� d'activation membre pour %s"); // mail

define('_US_YOURREGISTERED',"Vous �tes maintenant enregistr�. Un e-mail contenant une cl� d'activation de votre compte a �t� envoy� � l'adresse e-mail que vous avez fournie. Merci de suivre les instructions de ce mail pour activer votre compte. ");
define('_US_YOURREGMAILNG',"Vous �tes maintenant enregistr�. Cependant, nous sommes dans l'incapacit� d'envoyer le mail d'activation � votre adresse e-mail en raison d'une erreur interne survenue sur notre serveur. Nous sommes d�sol�s pour cet inconv�nient, merci d'envoyer un e-mail de notification au(x) webmestre(s) du site.");
define('_US_YOURREGISTERED2',"Vous �tes maintenant enregistr�. Merci de patienter afin que votre compte soit activ� par un des administrateurs. Vous recevrez un e-mail lorsqu'il aura �t� activ�. Ceci peut prendre quelques jours, merci d'�tre patient.");

// %s is your site name
define('_US_NEWUSERREGAT','Nouveau membre inscrit sur %s');
// %s is a username
define('_US_HASJUSTREG',"%s vient juste de s'inscrire !");

define('_US_INVALIDMAIL','ERREUR : E-mail Invalide');
define('_US_EMAILNOSPACES',"ERREUR : L'adresse e-mail ne doit pas contenir d'espaces.");
define('_US_INVALIDNICKNAME','ERREUR : Pseudo invalide');
define('_US_NICKNAMETOOLONG','Le Pseudo est trop long. Il doit faire moins de %s caract�res.');
define('_US_NICKNAMETOOSHORT','Le Pseudo est trop court. Il doit faire plus de %s caract�res.');
define('_US_NAMERESERVED','ERREUR : Ce Pseudo est r�serv�.');
define('_US_NICKNAMENOSPACES',"Il ne doit pas y avoir d'espaces dans le Pseudo.");
define('_US_NICKNAMETAKEN','ERREUR : Ce Pseudo est d�j� utilis�.');
define('_US_EMAILTAKEN','ERREUR : Adresse e-mail d�j� enregistr�e.');
define('_US_ENTERPWD','ERREUR: Vous devez fournir un mot de passe.');
define('_US_SORRYNOTFOUND',"D�sol�, aucune info membre correspondante n'a �t� trouv�e.");




// %s is your site name
define('_US_NEWPWDREQ','Demande de nouveau mot de passe sur %s');
define('_US_YOURACCOUNT', 'Votre compte sur %s');

define('_US_MAILPWDNG',"mail_password : Impossible de mettre � jour l'entr�e utilisateur. Contactez l'Administrateur");

// %s is a username
define('_US_PWDMAILED','Mot de passe pour %s envoy�.');
define('_US_CONFMAIL','Mail de confirmation pour %s envoy�.');
define('_US_ACTVMAILNG', "Echec d'envoi du mail de notification � %s");
define('_US_ACTVMAILOK', 'Mail de notification � %s envoy�.');

//%%%%%%                File Name userinfo.php                 %%%%%
define('_US_SELECTNG',"Pas d'utilisateur s�lectionn� ! Merci de revenir en arri�re et de recommencer.");
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','Windows Live ID');
define('_US_LOCATION','R�sidence');
define('_US_OCCUPATION','Profession');
define('_US_INTEREST',"Centres d'int�r�ts");
define('_US_SIGNATURE','Signature');
define('_US_EXTRAINFO','Infos compl�mentaires');
define('_US_EDITPROFILE','Editer le profil');
define('_US_LOGOUT','D�connexion');
define('_US_INBOX','En attente');
define('_US_MEMBERSINCE','Membre depuis');
define('_US_RANK','Classement');
define('_US_POSTS','Commentaires/Envois');
define('_US_LASTLOGIN','Derni�re connexion');
define('_US_ALLABOUT','Tout � propos de %s');
define('_US_STATISTICS','Statistiques');
define('_US_MYINFO','Mes infos');
define('_US_BASICINFO','Informations de base');
define('_US_MOREABOUT','Plus � propos de moi');
define('_US_SHOWALL','Afficher tout');

//%%%%%%                File Name edituser.php                 %%%%%
define('_US_PROFILE','Profil');
define('_US_REALNAME','Nom R�el');
define('_US_SHOWSIG','Toujours attacher ma signature');
define('_US_CDISPLAYMODE',"Mode d'affichage des commentaires");
define('_US_CSORTORDER','Ordre des commentaires');
define('_US_PASSWORD','Mot de passe');
define('_US_TYPEPASSTWICE','(Saisissez deux fois un nouveau mot de passe pour le changer)');
define('_US_SAVECHANGES','Sauver les changements');
define('_US_NOEDITRIGHT',"D�sol�, vous n'avez pas le droit d'�diter les infos de ce membre.");
define('_US_PASSNOTSAME','Les 2 mots de passe sont diff�rents. Ils doivent �tre identiques.');
define('_US_PWDTOOSHORT','D�sol�, votre mot de passe doit avoir au moins <b>%s</b> caract�res de long.');
define('_US_PROFUPDATED','Votre profil a �t� mis � jour !');
define('_US_USECOOKIE','Conserver mon pseudo dans un cookie pour 1 an');
define('_US_NO','Non');
define('_US_DELACCOUNT','Supprimer le compte');
define('_US_MYAVATAR', 'Mon avatar');
define('_US_UPLOADMYAVATAR', 'Envoyer mon avatar');
define('_US_MAXPIXEL','Nbre maxi de Pixels');
define('_US_MAXIMGSZ',"Taille maxi de l'image (Octets)");
define('_US_SELFILE','S�lectionnez un fichier');
define('_US_OLDDELETED','Votre ancien avatar va �tre effac� !');
define('_US_CHOOSEAVT', 'Choisir un avatar dans la liste disponible');

define('_US_PRESSLOGIN', 'Pressez le bouton ci-dessous pour vous connecter');

define('_US_ADMINNO', 'Les utilisateurs du groupe webmestres ne peuvent �tre enlev�s');
define('_US_GROUPS', 'Groupes de l\'utilisateur');
?>