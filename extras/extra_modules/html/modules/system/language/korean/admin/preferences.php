<?php
//  ------------------------------------------------------------------------ //
//                XOOPS Cube - PHP Content Management System                      //
//                    Copyright (c) 2006 XOOPSCube.org                           //
//                       <http://www.xoopscube.org/>                             //
//  ------------------------------------------------------------------------ //
//  ------------------------------------------------------------------------ //
//                XOOPS Cube Korean (translated by wanikoo[ wani@wanisys.net ])       //
//                       < http://www.wanisys.net/ >                             //
//                       < http://www.xoops.ne.kr/xoopscube/ >                             //
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

//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_MD_AM_SITEPREF","����Ʈ �Ϲݼ���");
define("_MD_AM_SITENAME","����Ʈ��");
define("_MD_AM_SLOGAN","����Ʈ ���ΰ�");
define("_MD_AM_ADMINML","������ �����ּ�");
define("_MD_AM_LANGUAGE","�⺻�����");
define("_MD_AM_STARTPAGE","���� ���");
define("_MD_AM_NONE","����");
define("_MD_AM_SERVERTZ","���� �ð���");
define("_MD_AM_DEFAULTTZ","�⺻ �ð���");
define("_MD_AM_DTHEME","�⺻ ����Ʈ �׸�");
define("_MD_AM_THEMESET","�׸� ��Ʈ");
define("_MD_AM_ANONNAME","�̵�Ϲ湮��(�մ�)�� ǥ�ø�");
define("_MD_AM_MINPASS","�н������� ���� ���ڼ�");
define("_MD_AM_NEWUNOTIFY","�ű� ȸ���� ����� �ִ� ��� ���Ϸ� ����/�뺸 ����");
define("_MD_AM_SELFDELETE","���ȸ���� �ڱ� ���������� ���(Ż�����)");
define("_MD_AM_LOADINGIMG","��ø� ��ٷ��ּ���...ȭ��(�׸�����)�� ǥ��");
define("_MD_AM_USEGZIP","gzip ������ ���");
define("_MD_AM_UNAMELVL","���̵�� ��밡���� ���ڵ��� ����! ���� ������ ������ �������ּ���!");
define("_MD_AM_STRICT","���� (���ĺ��� ���ڸ�)");
define("_MD_AM_MEDIUM","�߰�");
define("_MD_AM_LIGHT","���� (�ѱ�,���ڵ� ����㰡)");
define("_MD_AM_USERCOOKIE","���ȸ������ �Ҵ��� ��Ű�� �̸�");
define("_MD_AM_USERCOOKIEDSC","�� ��Ű�� ���ȸ���� ���̵� ����Ǿ� 1�Ⱓ ȸ���� ��ǻ�Ϳ� �����ϰԵ˴ϴ�.(ȸ���� ����� ���) ");
define("_MD_AM_USEMYSESS","������ ������ ī��Ʈ��������(��ü������)");
define("_MD_AM_USEMYSESSDSC","������ ī��Ʈ������(��ü����)");
define("_MD_AM_SESSNAME","����ID�� ���忡 ����� ��Ű�� �̸�");
define("_MD_AM_SESSNAMEDSC","�� ��Ű�� ����� ����ID�� ������ Ÿ�Ӿƿ��ǰų� ȸ���� �α׾ƿ��� ������ ��ȿ�ϰԵ˴ϴ�.(���� ī��Ʈ������(��ü����)�� ������ ��츸)");
define("_MD_AM_SESSEXPIRE","������ Ÿ�Ӿƿ��� �������� �ð�(����:��)");
define("_MD_AM_SESSEXPIREDSC","������ Ÿ�Ӿƿ��� �������� �ð��� �д����� ������ �ּ���! ( ���� ī��Ʈ������(��ü����)�� ������ ��츸)");
define("_MD_AM_BANNERS","��ʱ��� Ȱ��ȭ");
define("_MD_AM_MYIP","���� IP �ּҸ� �Է����ּ���!");
define("_MD_AM_MYIPDSC","�� IP �ּҴ� ��� �������� ��,�׿� ��Ÿ ����Ʈ ���� ���ܵ˴ϴ�.");
define("_MD_AM_ALWDHTML","������������ ����� ����� HTML�±�");
define("_MD_AM_INVLDMINPASS","�н������� �������ڼ��� �ùٸ��� �ʽ��ϴ�.");
define("_MD_AM_INVLDUCOOK","ȸ�� ��Ű�� �̸��� �ùٸ��� �ʽ��ϴ�.");
define("_MD_AM_INVLDSCOOK","����ID�� ��Ű�� �̸��� �ùٸ��� �ʽ��ϴ�.");
define("_MD_AM_INVLDSEXP","������ Ÿ�Ӿƿ��� �������� �ð��� �ùٸ��� �Էµ��� �ʾҽ��ϴ�.");
define("_MD_AM_ADMNOTSET","������ ������ �������� �ʾҽ��ϴ�.");
define("_MD_AM_YES","��");
define("_MD_AM_NO","�ƴϿ�");
define("_MD_AM_DONTCHNG","���ϴ� ���� �������� ���ñ� �ٶ��ϴ�.");
define("_MD_AM_REMEMBER","�� ������ ������ �����ڸ޴����� ���������ϰ� �Ϸ��� �ݵ�� �׼��������� 666(chmod 666)���� �����ϼž� �մϴ�.");
define("_MD_AM_IFUCANT","���� �� ������ �׼��������� �����Ͻ� �� ���� ��쿣 ���� ������ ����/�����ϼž߸� �մϴ�.");


define("_MD_AM_COMMODE","�⺻ �ڸ�Ʈ ǥ�ù��");
define("_MD_AM_COMORDER","�⺻ �ڸ�Ʈ ǥ�ü�");
define("_MD_AM_ALLOWHTML","�ڸ�Ʈ ������ ���� ÷���� ����� ");
define("_MD_AM_DEBUGMODE","����� ���");
define("_MD_AM_DEBUGMODEDSC","���� �׽�Ʈ/����� �ÿ� ����Ͻñ� �ٶ��ϴ�. �������������� ����� ��带 ����(��)�� �����Ͻñ� �ٶ��ϴ�.");
define("_MD_AM_AVATARALLOW","�ƹ�Ÿ �׸������� ���ε带 �����");
define('_MD_AM_AVATARMP','�ƹ�Ÿ ���ε������ ���� ���� �䱸 ���� ��');
define('_MD_AM_AVATARMPDSC','���ȸ���� �ڱ��� �ƹ�Ÿ�� ���ε��� ������ ������� �ʿ��� ���� ���� ���� �Է��� �ּ���');
define("_MD_AM_AVATARW","�ƹ�Ÿ �׸������� �ִ���� �� (pixel)");
define("_MD_AM_AVATARH","�ƹ�Ÿ �׸������� �ִ���� ���� (pixel)");
define("_MD_AM_AVATARMAX","�ƹ�Ÿ �׸������� �ִ���� ���ϻ����� (byte)");
define("_MD_AM_AVATARCONF","���ȸ�� ��ü �ƹ�Ÿ �׸����Ͽ� ���� ����");
define("_MD_AM_CHNGUTHEME","��� ���ȸ���� �׸��� ������");
define("_MD_AM_NOTIFYTO","�ű� ȸ�� ��� ����/�뺸 ������ ���� �׷��� ������ �ּ���!");
define("_MD_AM_ALLOWTHEME","����Ʈ �׸��� ������ �㰡��");
define("_MD_AM_ALLOWIMAGE","�������� �׸����� ǥ�ø� �㰡��");

define("_MD_AM_USERACTV","���� Ȱ��ȭ�� ���� ȸ�� �ڽ��� Ȯ���� �ʿ�(��õ)");
define("_MD_AM_AUTOACTV","�ڵ������� ������ Ȱ��ȭ��");
define("_MD_AM_ADMINACTV","�����ڰ� ���� Ȱ��ȭ ���θ� ����");
define("_MD_AM_ACTVTYPE","�ű� ȸ�� ������ Ȱ��ȭ ����� ������ �ּ���!");
define("_MD_AM_ACTVGROUP","���� Ȱ��ȭ Ȯ�� �Ƿ� ������ ���� �׷��� ������ �ּ���!");
define("_MD_AM_ACTVGROUPDSC","�����ڰ� ���� Ȱ��ȭ ���θ� ���� �� �����Ͻ� ��츸 ��ȿ��");
define('_MD_AM_USESSL', '�α��ο� SSL�� ���');
define('_MD_AM_SSLPOST', 'SSL�α��νÿ� ����� POST������ �̸�');
define('_MD_AM_SSLPOSTDSC', 'The name of variable used to transfer session value via POST. If you are unsure, set any name that is hard to guess.');
define('_MD_AM_DEBUGMODE0','����(��)');
define('_MD_AM_DEBUGMODE1','PHP �����');
define('_MD_AM_DEBUGMODE2','MySQL/Blocks �����');
define('_MD_AM_DEBUGMODE3','Smarty ���÷� �����');
define('_MD_AM_MINUNAME', '���̵��� ���� ���ڼ�(byte)');
define('_MD_AM_MAXUNAME', '���̵��� �ִ� ���ڼ�(byte)');
define('_MD_AM_GENERAL', '�Ϲݼ���');
define('_MD_AM_USERSETTINGS', '���ȸ�� ��������');
define('_MD_AM_ALLWCHGMAIL', '���ȸ���� �ڱ� �����ּ� ������ �����');
define('_MD_AM_ALLWCHGMAILDSC', '');
define('_MD_AM_IPBAN', 'IP ����(IP Banning)');
define('_MD_AM_BADEMAILS', 'ȸ���� �����ּҷμ� ����� �� ���� ���ڿ�');
define('_MD_AM_BADEMAILSDSC', '������ ���ڿ��� <b>|</b> �� ����, ��ҹ��ڴ� �������� ����, ���Խ� ��밡��');
define('_MD_AM_BADUNAMES', '���̵�� ����� �� ���� ���ڿ�');
define('_MD_AM_BADUNAMESDSC', '������ ���ڿ��� <b>|</b> �� ����, ��ҹ��ڴ� �������� ����, ���Խ� ��밡��');
define('_MD_AM_DOBADIPS', 'IP ����(IP bans) ���');
define('_MD_AM_DOBADIPSDSC', '�ش� IP �ּҷκ��� �� ����Ʈ���� ������ ���ܵ˴ϴ�.');
define('_MD_AM_BADIPS', '���� ó���� IP �ּҸ� �Է��� �ּ���!<br />�� IP�ּҴ� <b>|</b> �� ����, ��ҹ��� �������� ����, ���Խ� ��밡��');
define('_MD_AM_BADIPSDSC', '^aaa.bbb.ccc �� aaa.bbb.ccc �� �����ϴ� IP�ּҸ� ����,<br />aaa.bbb.ccc$ �� aaa.bbb.ccc�� ������ IP�ּҸ� ����,<br />aaa.bbb.ccc �� aaa.bbb.ccc �� ������ IP�ּҸ� �����մϴ�.');
define('_MD_AM_PREFMAIN', '�ý��� ���� ����');
define('_MD_AM_METAKEY', 'Meta�±�(Ű����[Keywords])');
define('_MD_AM_METAKEYDSC', 'Ű����[Keywords] Meta�±״� ����Ʈ�� ������ ǥ���մϴ�. �� Ű����� ��ǥ(�޸�)�� ������ �ּ���!(Ex. XOOPS, PHP, mySQL, portal system)');
define('_MD_AM_METARATING', 'Meta�±�(���[Rating])');
define('_MD_AM_METARATINGDSC', '����Ʈ ���� ��� �������� �����մϴ�.');
define('_MD_AM_METAOGEN', 'General');
define('_MD_AM_METAO14YRS', '14 years');
define('_MD_AM_METAOREST', 'Restricted');
define('_MD_AM_METAOMAT', 'Mature');
define('_MD_AM_METAROBOTS', 'Meta�±�(�˻��κ�[Robots])');
define('_MD_AM_METAROBOTSDSC', '�˻��κ����� ��������� �����մϴ�.');
define('_MD_AM_INDEXFOLLOW', 'Index, Follow');
define('_MD_AM_NOINDEXFOLLOW', 'No Index, Follow');
define('_MD_AM_INDEXNOFOLLOW', 'Index, No Follow');
define('_MD_AM_NOINDEXNOFOLLOW', 'No Index, No Follow');
define('_MD_AM_METAAUTHOR', 'Meta�±�(�ۼ���[Author])');
define('_MD_AM_METAAUTHORDSC', '�ۼ��� Meta��ũ�� ����Ʈ ������ �ۼ��� ������ �����մϴ�. �̸�, �������� �����ּ�, ȸ���, URL���� �����Ͻ� �� �ֽ��ϴ�. ');
define('_MD_AM_METACOPYR', 'Meta�±�(���۱�[Copyright])');
define('_MD_AM_METACOPYRDSC', '���۱� Meta�±״� ����Ʈ ���� ������ ���� ���۱������� �����մϴ�.');
define('_MD_AM_METADESC', 'Meta�±�(���뼳��[Description])');
define('_MD_AM_METADESCDSC', '���뼳�� Meta�±״� ����Ʈ�� ������ �����ϱ����� �±��Դϴ�.');
define('_MD_AM_METAFOOTER', 'Meta�±�/Footer ����');
define('_MD_AM_FOOTER', 'Footer');
define('_MD_AM_FOOTERDSC', '��ũ�� ����ϽǶ����� �ݵ�� ��ü �н�(http://~)�� �Է��Ͻñ� �ٶ��ϴ�. �׷��� ���� ������ ��⳻�� ���������� �ùٸ��� ǥ�õ��� ���� �� �ֽ��ϴ�.');
define('_MD_AM_CENSOR', '������� ����');
define('_MD_AM_DOCENSOR', '������� ������ �����');
define('_MD_AM_DOCENSORDSC', '�� ����� ON(���)�� ��쿣 ������ üũ�ϰ� �˴ϴ�.(����Ʈ ó�����ǵ带 �߽��� ��쿣 OFF�� �����ϼ���.)');
define('_MD_AM_CENSORWRD', '�������');
define('_MD_AM_CENSORWRDDSC', '����ڰ� ����� ����� ������ ���ڿ��� �Է��� �ּ���!<br />�� ���ڿ��� <b>|</b>�� ����, ��ҹ��� �������� ����.');
define('_MD_AM_CENSORRPLC', '������� ��� ǥ���� ���ڿ�:');
define('_MD_AM_CENSORRPLCDSC', '������ ���� ��� �̰��� �����Ͻ� ���ڿ��� ��ġ�ǰ� �˴ϴ�.');

define('_MD_AM_SEARCH', '�˻� �ɼ�');
define('_MD_AM_DOSEARCH', '�۷ι� �˻������ �����');
define('_MD_AM_DOSEARCHDSC', '����Ʈ���� �����/��� ���� ��ü�˻��� �ǽ��մϴ�.');
define('_MD_AM_MINSEARCH', 'Ű���� �������ڼ�');
define('_MD_AM_MINSEARCHDSC', '�˻��� �� �� �ʿ��� Ű������ �������ڼ��� �����մϴ�.');
define('_MD_AM_MODCONFIG', '��� ���� �ɼ�');
define('_MD_AM_DSPDSCLMR', '�̿���(disclaimer)�� ǥ��');
define('_MD_AM_DSPDSCLMRDSC', '�� �� �����Ͻø� �űԵ���������� �̿����� ǥ���մϴ�.');
define('_MD_AM_REGDSCLMR', '�̿���(Registration disclaimer)');
define('_MD_AM_REGDSCLMRDSC', '�űԵ�� �������� ǥ���� �̿����� �Է��� �ּ���!');
define('_MD_AM_ALLOWREG', '�ű� ȸ���� ����� �����');
define('_MD_AM_ALLOWREGDSC', '�� �� �����Ͻø� �ű� ȸ�� ����� ����ϰ� �˴ϴ�.');
define('_MD_AM_THEMEFILE', 'themes/ ���丮�κ����� �ڵ� ���׷��̵����� ���');
define('_MD_AM_THEMEFILEDSC', '���� ������� �׸����� �������� �� �ֱ��� ������ themes/ ���丮���� ������ ��� �ڵ������� DB�� ������ �����ϰ� �˴ϴ�. ��������Ʈ������ OFF(��)�� ������ ���� ��õ�մϴ�.');
define('_MD_AM_CLOSESITE', '����Ʈ ��������');
define('_MD_AM_CLOSESITEDSC', 'Ư�� �׷� �̿ܿ��� ����Ʈ�� �������� ���ϰ� �մϴ�.');
define('_MD_AM_CLOSESITEOK', '����Ʈ ���������ÿ��� ������ ����� �׷�');
define('_MD_AM_CLOSESITEOKDSC', '�⺻ �����ڱ׷��� �ڵ������� ������ ���˴ϴ�.');
define('_MD_AM_CLOSESITETXT', '����Ʈ ���������� ����');
define('_MD_AM_CLOSESITETXTDSC', '�Է��Ͻ� ���� ����Ʈ ���������ÿ� ǥ�õǰ� �˴ϴ�.');
define('_MD_AM_SITECACHE', '����Ʈ ĳ��');
define('_MD_AM_SITECACHEDSC', '����Ʈ���� �������� ��⺰�� ĳ���մϴ�. ����Ʈ ĳ������� ����� �������� ĳ�����(�ִ� ���)���� �켱�� �˴ϴ�.');
define('_MD_AM_MODCACHE', '��� ĳ��');
define('_MD_AM_MODCACHEDSC', '�� ����� �������� ĳ���� �� �ð��� ���̸� ������ �ּ���. ��⿡ ������ ĳ������� �ִ� ��쿡�� ĳ������ �� �����Ͻ� ���� ��õ�մϴ�.(���ĳ���� ���Ե��� �ʽ��ϴ�.) ');
define('_MD_AM_NOMODULE', 'ĳ�������� ����� �������� �ʽ��ϴ�.');
define('_MD_AM_DTPLSET', '�⺻ ���÷� ��Ʈ');
define('_MD_AM_SSLLINK', 'SSL�α��� ������ URL');

// added for mailer
define("_MD_AM_MAILER","���� ����");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","�۽��� �����ּ�");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","�۽���");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","PM���� �۽���");
define("_MD_AM_MAILFROMUIDDESC","PM������ ���� �� �۽��ڷμ� �⺻������ ǥ�õ� ����� ������ �ּ���.");
define("_MD_AM_MAILERMETHOD","���� ���� ���");
define("_MD_AM_MAILERMETHODDESC","���� ���� ����� ������ �ּ���! �⺻���������� PHP�� mail()�Լ��� ���˴ϴ�.");
define("_MD_AM_SMTPHOST","SMTP ���� �ּ�");
define("_MD_AM_SMTPHOSTDESC","SMTP ������ �ּ� ����� ������ �ּ���!");
define("_MD_AM_SMTPUSER","SMTPAuth ������");
define("_MD_AM_SMTPUSERDESC","SMTPAuth�� ����� SMTP������ ���ӽ� ���� ������");
define("_MD_AM_SMTPPASS","SMTPAuth �н�����");
define("_MD_AM_SMTPPASSDESC","SMTPAuth�� ����� SMTP������ ���ӽ� ���� �н�����");
define("_MD_AM_SENDMAILPATH","sendmail ���");
define("_MD_AM_SENDMAILPATHDESC","sendmail program���� ��ü ��θ� ������ �ּ���");
define("_MD_AM_THEMEOK","���ð����� �׸�");
define("_MD_AM_THEMEOKDSC","����ڰ� �⺻�׸��� ������ �� �ְ� �� �׸��� ������ �ּ���.");

?>