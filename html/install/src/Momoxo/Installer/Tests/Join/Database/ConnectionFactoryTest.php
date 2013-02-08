<?php

namespace Momoxo\Installer\Tests\Join\Database;

use PDO;
use Momoxo\Installer\Database\ConnectionFactory;

/**
 * This join test integrates real MySQL server
 */
class ConnectionFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;

    private $createdDatabases = array();

    protected function setUp()
    {
        try {
            $this->pdo = new PDO('mysql:host='.$_SERVER['XOOPS_TEST_DB_HOST'], $_SERVER['XOOPS_TEST_DB_USER'], $_SERVER['XOOPS_TEST_DB_PASS']);
        } catch ( \Exception $e ) {
            $this->markTestSkipped("Cannot connect to database.");
        }
    }

    protected function tearDown()
    {
        foreach ($this->createdDatabases as $database => $dummy) {
            $this->dropDatabase($database);
        }
    }

    public function createDatabase($database)
    {
        $this->pdo->query('CREATE DATABASE '.$database);
        $this->createdDatabases[$database] = 1;
    }

    public function dropDatabase($database)
    {
        $this->pdo->query('DROP DATABASE '.$database);
        if ( isset($this->createdDatabases[$database]) ) {
            unset($this->createdDatabases[$database]);
        }
    }

    public function assertDatabaseExists($databaseName)
    {
        $this->assertContains($databaseName, $this->pdo->query('SHOW DATABASES')->fetchAll(PDO::FETCH_COLUMN));
    }

    public function assertDatabaseNotExists($databaseName)
    {
        $this->assertNotContains($databaseName, $this->pdo->query('SHOW DATABASES')->fetchAll(PDO::FETCH_COLUMN));
    }

    public function testWithValidUsername()
    {
        $connectionFactory = new ConnectionFactory();
        $connection = $connectionFactory->create(
            $_SERVER['XOOPS_TEST_DB_HOST'],
            $_SERVER['XOOPS_TEST_DB_USER'],
            $_SERVER['XOOPS_TEST_DB_PASS']);
        $this->assertInstanceOf('PDO', $connection);
    }

    /**
     * @expectedException \PDOException
     */
    public function testWithInvalidUsername()
    {
        $connectionFactory = new ConnectionFactory();
        $connectionFactory->create('localhost', '*invalid*', 'password');
    }

    public function testWithDBNameAndValidUsername()
    {
        $this->createDatabase($_SERVER['XOOPS_TEST_DB_NAME']);
        $this->assertDatabaseExists($_SERVER['XOOPS_TEST_DB_NAME']);
        $connectionFactory = new ConnectionFactory();
        $connection = $connectionFactory->createWithDatabaseName(
            $_SERVER['XOOPS_TEST_DB_HOST'],
            $_SERVER['XOOPS_TEST_DB_USER'],
            $_SERVER['XOOPS_TEST_DB_PASS'],
            $_SERVER['XOOPS_TEST_DB_NAME']);
        $this->assertInstanceOf('PDO', $connection);
    }

    /**
     * @expectedException \PDOException
     */
    public function testWithDBNameAndInvalidUsername()
    {
        $connectionFactory = new ConnectionFactory();
        $connectionFactory->createWithDatabaseName('localhost', '*invalid*', 'password', 'dummy_db');
    }
}
