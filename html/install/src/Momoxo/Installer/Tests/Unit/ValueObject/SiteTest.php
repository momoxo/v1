<?php

namespace Momoxo\Installer\Tests\Unit\ValueObject;

use Momoxo\Installer\ValueObject\Site;
use Momoxo\Installer\ValueObject\Database;
use Momoxo\Installer\ValueObject\Admin;

class SiteTest extends \PHPUnit_Framework_TestCase
{
    public function testRootPath()
    {
        $site = new Site();
        $this->assertAttributeSame(null, 'rootPath', $site);
        $site->setRootPath('/path/to/root/path');
        $this->assertSame('/path/to/root/path', $site->getRootPath());
    }

    public function testTrustPath()
    {
        $site = new Site();
        $site->setTrustPath('/path/to/trust/path');
        $this->assertSame('/path/to/trust/path', $site->getTrustPath());
    }

    public function testUrl()
    {
        $site = new Site();
        $this->assertNull($site->getUrl());
        $site->setUrl('http://example.com');
        $this->assertSame('http://example.com', $site->getUrl());
    }

    public function testSalt()
    {
        $site = new Site();
        $this->assertNull($site->getSalt());
        $site->setSalt('salt');
        $this->assertSame('salt', $site->getSalt());
    }

    public function testDatabase()
    {
        $site = new Site();
        $this->assertNull($site->getDB());
        $db = new Database();
        $site->setDB($db);
        $this->assertSame($db, $site->getDB());
    }

    public function testAdmin()
    {
        $site = new Site();
        $this->assertNull($site->getAdmin());
        $admin = new Admin();
        $site->setAdmin($admin);
        $this->assertSame($admin, $site->getAdmin());
    }
}
