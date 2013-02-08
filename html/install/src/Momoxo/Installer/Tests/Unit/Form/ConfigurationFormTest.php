<?php

namespace Momoxo\Installer\Tests\Unit\Form;

use Momoxo\Installer\Form\ConfigurationForm;

class ConfigurationFormTest extends \PHPUnit_Framework_TestCase
{
    public function testSalt()
    {
        $form = new ConfigurationForm();
        $this->assertSHA1Format($form->getSalt());
    }

    public function assertSHA1Format($string)
    {
        $this->assertRegExp('/^[0-9a-f]{40}$/i', $string);
    }

    public function testFetch()
    {
        $form = new ConfigurationForm();
        $form->fetch(array(
            'url'                 => 'http://example.com',
            'dbHost'              => 'localhost',
            'dbUser'              => 'root',
            'dbPassword'          => 'p@ssW0rd',
            'dbName'              => 'momoxo',
            'dbPrefix'            => 'prefix',
            'adminUsername'       => 'admin',
            'adminEmail'          => 'admin@example.com',
            'adminPassword'       => 'admin_password',
            'adminPasswordVerify' => 'admin_password_verify',
        ));
        $this->assertSame('http://example.com', $form->getURL());
        $this->assertSame('localhost', $form->getDBHost());
        $this->assertSame('root', $form->getDBUser());
        $this->assertSame('p@ssW0rd', $form->getDBPassword());
        $this->assertSame('momoxo', $form->getDBName());
        $this->assertSame('prefix', $form->getDBPrefix());
        $this->assertSame('admin', $form->getAdminUsername());
        $this->assertSame('admin@example.com', $form->getAdminEmail());
        $this->assertSame('admin_password', $form->getAdminPassword());
        $this->assertAttributeSame('admin_password_verify', 'adminPasswordVerify', $form);
    }

    public static function getValidData()
    {
        return array(
            'url'                 => 'http://example.com',
            'dbHost'              => 'localhost',
            'dbUser'              => 'root',
            'dbPassword'          => 'p@ssW0rd',
            'dbName'              => 'momoxo',
            'dbPrefix'            => 'prefix',
            'adminUsername'       => 'admin',
            'adminEmail'          => 'admin@example.com',
            'adminPassword'       => 'adminP@ss',
            'adminPasswordVerify' => 'adminP@ss',
        );
    }

    public function testIsValidWithValidData()
    {
        $form = new ConfigurationForm();
        $form->fetch($this->getValidData());
        $this->assertTrue($form->isValid());
    }

    public function testIsValidWithDBHostIsBlank()
    {
        $data = $this->getValidData();
        $data['dbHost'] = '';
        $form = new ConfigurationForm();
        $form->fetch($data);
        $this->assertFalse($form->isValid());
        $this->assertContains("データベースのホスト名を入力してください", $form->getErrors());
    }

    public function testIsValidWithDBUserNameIsBlank()
    {
        $data = $this->getValidData();
        $data['dbUser'] = '';
        $form = new ConfigurationForm();
        $form->fetch($data);
        $this->assertFalse($form->isValid());
        $this->assertContains("データベースユーザ名を入力してください", $form->getErrors());
    }

    public function testIsInvalidWithDBNameIsBlank()
    {
        $data = $this->getValidData();
        $data['dbName'] = '';
        $form = new ConfigurationForm();
        $form->fetch($data);
        $this->assertFalse($form->isValid());
        $this->assertContains("データベース名を入力してください", $form->getErrors());
    }

    public function testIsInvalidWithDBPrefixIsBlank()
    {
        $data = $this->getValidData();
        $data['dbPrefix'] = '';
        $form = new ConfigurationForm();
        $form->fetch($data);
        $this->assertFalse($form->isValid());
        $this->assertContains("テーブル接頭語を入力してください", $form->getErrors());
    }

    public function testIsInvalidWithAdminNameIsBlank()
    {
        $data = $this->getValidData();
        $data['adminUsername'] = '';
        $form = new ConfigurationForm();
        $form->fetch($data);
        $this->assertFalse($form->isValid());
        $this->assertContains("管理者ユーザ名を入力してください", $form->getErrors());
    }

    public function testIsInvalidWithAdminEmailIsBlank()
    {
        $data = $this->getValidData();
        $data['adminEmail'] = '';
        $form = new ConfigurationForm();
        $form->fetch($data);
        $this->assertFalse($form->isValid());
        $this->assertContains("管理者メールアドレスを入力してください", $form->getErrors());
    }

    public function testIsValidWithAdminPasswordIsBlank()
    {
        $data = $this->getValidData();
        $data['adminPassword'] = '';
        $form = new ConfigurationForm();
        $form->fetch($data);
        $this->assertFalse($form->isValid());
        $this->assertContains("管理者パスワードを入力してください", $form->getErrors());
    }

    public function testIsValidNotMatchPassword()
    {
        $data = $this->getValidData();
        $data['adminPasswordVerify'] = '_dummy_pass_';
        $form = new ConfigurationForm();
        $form->fetch($data);
        $this->assertFalse($form->isValid());
        $this->assertContains("管理者パスワードが一致しません", $form->getErrors());
    }
}
