<?php
// $Id$

// RMV-NOTIFY

// Text for various templates...

define ('_NOT_NOTIFICATIONOPTIONS', 'Options de notification');
define ('_NOT_UPDATENOW', 'Mettre � jour');
define ('_NOT_UPDATEOPTIONS', 'Mettre � jour les options de notification');

define ('_NOT_CANCEL', 'Annuler');
define ('_NOT_CLEAR', 'Vider');
define ('_NOT_DELETE', 'Supprimer');
define ('_NOT_CHECKALL', 'V�rifier tous');
define ('_NOT_MODULE', 'Module');
define ('_NOT_CATEGORY', 'Cat�gorie');
define ('_NOT_ITEMID', 'ID');
define ('_NOT_ITEMNAME', 'Nom');
define ('_NOT_EVENT', 'Ev�nement');
define ('_NOT_EVENTS', 'Ev�nements');
define ('_NOT_ACTIVENOTIFICATIONS', 'Notifications actives');
define ('_NOT_NAMENOTAVAILABLE', 'Pas de nom disponible');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define ('_NOT_ITEMNAMENOTAVAILABLE', "Nom de l'�l�ment non disponible");
define ('_NOT_ITEMTYPENOTAVAILABLE', "Type de l'�l�ment non disponible");
define ('_NOT_ITEMURLNOTAVAILABLE', "URL de l'�l�ment non disponible");
define ('_NOT_DELETINGNOTIFICATIONS', 'Suppression des notifications');
define ('_NOT_DELETESUCCESS', 'Notification(s) supprim�e(s) avec succ�s.');
define ('_NOT_UPDATEOK', 'Options de notification mise � jour');
define ('_NOT_NOTIFICATIONMETHODIS', 'La m�thode de notification est');
define ('_NOT_EMAIL', 'e-mail');
define ('_NOT_PM', 'message priv�');
define ('_NOT_DISABLE', 'd�sactiv�e');
define ('_NOT_CHANGE', 'Changer');
define ('_NOT_RUSUREDEL', 'Voulez-vous �liminer ces Notifications');
define ('_NOT_NOACCESS', "Vous n'avez pas la permission d'acc�der � cette page.");


// Text for module config options

define ('_NOT_ENABLE', 'Activ�');
define ('_NOT_NOTIFICATION', 'Notification');

define ('_NOT_CONFIG_ENABLED', 'Notification activ�e');
define ('_NOT_CONFIG_ENABLEDDSC', "Ce module permet aux utilisateurs de choisir d'�tre averti lorsque certains �v�nements arrivent. Choisissez 'oui' pour permettre cette fonction.");

define ('_NOT_CONFIG_EVENTS', 'Activer les �v�nements sp�cifiques');
define ('_NOT_CONFIG_EVENTSDSC', "Choisissez les notifications d'�v�nements auquels vos utilisateurs peuvent souscrire.");

define ('_NOT_CONFIG_ENABLE', 'Activer la notification');
define ('_NOT_CONFIG_ENABLEDSC', "Ce module permet aux utilisateurs d'�tre averti lorsque certains �v�nements arrivent. Choisissez si les utilisateurs doivent �tre pr�venus avec les options de notifications dans un bloc (Style Bloc), dans le module (Style Int�gr�), ou les deux. Pour la notification de style bloc, le bloc d'options de notifications doit �tre activ� pour ce module.");
define ('_NOT_CONFIG_DISABLE', 'D�sactiver la notification');
define ('_NOT_CONFIG_ENABLEBLOCK', 'Activer uniquement le style bloc');
define ('_NOT_CONFIG_ENABLEINLINE', 'Activer uniquement le style int�gr�');
define ('_NOT_CONFIG_ENABLEBOTH', 'Activer la notification (les 2 Styles)');

// For notification about comment events

define ('_NOT_COMMENT_NOTIFY', 'Commentaire ajout�');
define ('_NOT_COMMENT_NOTIFYCAP', "Me pr�venir lorsqu'un nouveau commentaire est post� pour cet article.");
define ('_NOT_COMMENT_NOTIFYDSC', "Recevoir une notification chaque fois qu'un nouveau commentaire est post� (ou approuv�) pour cet article.");
define ('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : Commentaire ajout� � {X_ITEM_TYPE}');

define ('_NOT_COMMENTSUBMIT_NOTIFY', 'Commentaire propos�');
define ('_NOT_COMMENTSUBMIT_NOTIFYCAP', "Me pr�venir lorsqu'un nouveau commentaire est propos� (en attente d'� approuv�) pour cet article.");
define ('_NOT_COMMENTSUBMIT_NOTIFYDSC', "Recevoir une notification chaque fois qu'un nouveau commentaire est propos� (en attente d'�tre approuv�) pour cet article.");
define ('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : Commentaire propos� � {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define ('_NOT_BOOKMARK_NOTIFY', 'Signet');
define ('_NOT_BOOKMARK_NOTIFYCAP', 'Pas de notification pour cet article.');
define ('_NOT_BOOKMARK_NOTIFYDSC', "Conserver la trace de cet article sans recevoir de notification d'�v�nement.");

// For user profile
// FIXME: These should be reworded a little...

define ('_NOT_NOTIFYMETHOD', 'M�thode de notification : Lorsque vous contr�lerez par exemple un forum, comment voulez-vous recevoir les notifications de mises � jour ?');
define ('_NOT_METHOD_EMAIL', "E-mail (utiliser l'address de mon profil)");
define ('_NOT_METHOD_PM', 'Message priv�');
define ('_NOT_METHOD_DISABLE', 'Temporairement d�sactiv�');

define ('_NOT_NOTIFYMODE', 'Mode de notification par d�faut');
define ('_NOT_MODE_SENDALWAYS', "M'avertir pour toutes les mises � jour s�lectionn�es");
define ('_NOT_MODE_SENDONCE', 'Me pr�venir une seule fois');
define ('_NOT_MODE_SENDONCEPERLOGIN', "Me pr�venir une fois et alors d�sactiver jusqu'� ce que je me connecte � nouveau");

?>
