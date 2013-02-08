<?php

namespace Momoxo\Installer\Tests\Unit\Factory;

use Momoxo\Installer\ValueObject\Site;
use Momoxo\Installer\ValueObject\Database;
use Momoxo\Installer\ValueObject\Admin;
use Momoxo\Installer\Factory\SiteFactory;
use Momoxo\Installer\Form\ConfigurationForm;
use Momoxo\Installer\Tests\Unit\Form\ConfigurationFormTest;
use Momoxo\Installer\InstallerConfig;

class SiteFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function getInstallerConfigStub()
    {
        $stub = $this->getMockBuilder('Momoxo\Installer\InstallerConfig')->disableOriginalConstructor()->getMock();
        $stub->expects($this->at(0))->method('get')->with('xoops_root_path')->will($this->returnValue('/path/to/root'));
        $stub->expects($this->at(1))->method('get')->with('xoops_trust_path')->will($this->returnValue('/path/to/trust'));
        $stub->expects($this->at(2))->method('get')->with('database.type')->will($this->returnValue('mysql'));
        $stub->expects($this->at(3))->method('get')->with('database.permanent_connection')->will($this->returnValue(false));

        return $stub;
    }

    public function testCreateByConfigurationForm()
    {
        $form = new ConfigurationForm();
        $form->fetch(ConfigurationFormTest::getValidData());
        $installerConfig = $this->getInstallerConfigStub();

        $factory = new SiteFactory();
        $site = $factory->createByConfigurationForm($form, $installerConfig);
        $this->assertTrue($site instanceof Site);
        $this->assertSame('/path/to/root', $site->getRootPath());
        $this->assertSame('/path/to/trust', $site->getTrustPath());
        $this->assertSame('http://example.com', $site->getUrl());
        $this->assertNotEmpty($site->getSalt());

        $database = $site->getDB();
        $this->assertTrue($database instanceof Database);
        $this->assertSame('mysql', $database->getType());
        $this->assertSame('localhost', $database->getHost());
        $this->assertSame('root', $database->getUser());
        $this->assertSame('p@ssW0rd', $database->getPassword());
        $this->assertSame('momoxo', $database->getName());
        $this->assertSame('prefix', $database->getPrefix());
        $this->assertFalse($database->isPermanentConnectionEnabled());

        $admin = $site->getAdmin();
        $this->assertSame('admin', $admin->getUsername());
        $this->assertSame('admin@example.com', $admin->getEmail());
        $this->assertSame('http://example.com', $admin->getUrl());
        $this->assertSame('adminP@ss', $admin->getPassword());
        $this->assertSame(date('Z') / 3600, $admin->getTimezoneOffset());
        $this->assertTrue($admin instanceof Admin);
    }

    public function testTrailLastSlashFromSiteURL()
    {
        $postData = ConfigurationFormTest::getValidData();
        $postData['url'] = 'http://example.com/'; // <-- This last slash should be removed by the factory.

        $form = new ConfigurationForm();
        $form->fetch($postData);
        $installerConfig = $this->getInstallerConfigStub();

        $factory = new SiteFactory();
        $site = $factory->createByConfigurationForm($form, $installerConfig);
        $this->assertTrue($site instanceof Site);
        $this->assertSame('http://example.com', $site->getUrl());
    }
}
