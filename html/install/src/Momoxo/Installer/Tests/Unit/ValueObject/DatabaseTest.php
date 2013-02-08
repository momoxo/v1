<?php

namespace Momoxo\Installer\Tests\Unit\ValueObject;

use Momoxo\Installer\ValueObject\Database;

class DatabaseTest extends \PHPUnit_Framework_TestCase
{
    public function testType()
    {
        $database = new Database();
        $this->assertNull($database->getType());
        $database->setType('mysql');
        $this->assertSame('mysql', $database->getType());
    }

    public function testDatabasePrefix()
    {
        $database = new Database();
        $this->assertNull($database->getPrefix());
        $database->setPrefix('prefix');
        $this->assertSame('prefix', $database->getPrefix());
    }

    public function testDatabaseHost()
    {
        $database = new Database();
        $this->assertNull($database->getHost());
        $database->setHost('127.0.0.1');
        $this->assertSame('127.0.0.1', $database->getHost());
    }

    public function testDatabaseUser()
    {
        $database = new Database();
        $this->assertNull($database->getUser());
        $database->setUser('root');
        $this->assertSame('root', $database->getUser());
    }

    public function testDatabasePassword()
    {
        $database = new Database();
        $this->assertNull($database->getPassword());
        $database->setPassword('p@ssW0rd');
        $this->assertSame('p@ssW0rd', $database->getPassword());
    }

    public function testDatabaseName()
    {
        $database = new Database();
        $this->assertNull($database->getName());
        $database->setName('momoxo');
        $this->assertSame('momoxo', $database->getName());
    }

    public function testPermanentConnection()
    {
        $database = new Database();
        $this->assertAttributeSame(null, 'permanentConnection', $database);
        $database->enablePermanentConnection();
        $this->assertTrue($database->isPermanentConnectionEnabled());
        $database->disablePermanentConnection();
        $this->assertFalse($database->isPermanentConnectionEnabled());
    }
}
