<?php

$I = new WebGuy($scenario);

$I->wantTo('log in as admin');
$I->amOnPage('/');
$I->fillField('#legacy_xoopsform_block_uname','admin');
$I->fillField('#legacy_xoopsform_block_pass','test');
$I->click('#legacy_xoopsform_block_submit');
$I->see('ログイン処理中です');

$I->wantTo('uninstall mylinks');
$I->amOnPage('/modules/legacy/admin/index.php?action=ModuleUninstall&dirname=mylinks&force=1');
$I->see('リンク集 をアンインストールします');
$I->click('アンインストール');
$I->see('リンク集 モジュールのアンインストールに成功しました');

$I->wantTo('install mylinks');
$I->amOnPage('/modules/legacy/admin/index.php?action=ModuleInstall&dirname=mylinks');
$I->see('リンク集 をインストールします');
$I->click('#contentBody form input[type=submit]');
$I->see('リンク集 モジュールのインストールに成功しました');
