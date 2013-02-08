<?php

namespace Momoxo\Installer\Tests\Unit\ValueObject;

use Momoxo\Installer\ValueObject\Admin;

class AdminTest extends \PHPUnit_Framework_TestCase
{
    public function test__construct()
    {
        $admin = new Admin();
        $this->assertSame(time(), $admin->getLastLogin());
        $this->assertSame(time(), $admin->getRegisteredDate());
    }

    public function testUsername()
    {
        $admin = new Admin();
        $this->assertNull($admin->getUsername());
        $admin->setUsername('alice');
        $this->assertSame('alice', $admin->getUsername());
    }

    public function testPassword()
    {
        $admin = new Admin();
        $this->assertNull($admin->getPassword());
        $admin->setPassword('p@ssW0rd');
        $this->assertSame('p@ssW0rd', $admin->getPassword());
    }

    public function testEmail()
    {
        $admin = new Admin();
        $this->assertNull($admin->getEmail());
        $admin->setEmail('alice@example.com');
        $this->assertSame('alice@example.com', $admin->getEmail());
    }

    public function testTimezoneOffset()
    {
        $admin = new Admin();
        $this->assertNull($admin->getTimezoneOffset());
        $admin->setTimezoneOffset(1.5);
        $this->assertSame(1.5, $admin->getTimezoneOffset());
    }

    public function testUrl()
    {
        $admin = new Admin();
        $this->assertNull($admin->getUrl());
        $admin->setUrl('http://example.com/');
        $this->assertSame('http://example.com/', $admin->getUrl());
    }

    public function testRemove()
    {
        $ref = new \ReflectionClass(new Admin);
        $this->assertFalse($ref->hasMethod('setPasswordEncryptor'));
        $this->assertFalse($ref->hasProperty('passwordEncryptor'));
    }
}
