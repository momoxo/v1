<?php

namespace Momoxo\Installer\Tests\Join\Service;

use PDO;
use Momoxo\Installer\Service\SiteConstructionService;
use Momoxo\Installer\Service\ServiceException;
use Momoxo\Installer\ConfigFormatter\ConstantFormatter;
use Momoxo\Installer\ValueObject\Site;
use Momoxo\Installer\ValueObject\Database;
use Momoxo\Installer\ValueObject\Admin;
use Momoxo\Installer\Database\ConnectionFactory;
use Momoxo\Installer\Database\SqlUtility;
use Momoxo\Installer\Security\MD5PasswordEncryptor;
use Momoxo\Installer\Tests\SandboxDirectoryManager;

class SiteConstructionServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;

    protected function setUp()
    {
        SandboxDirectoryManager::resetSandboxDirectory();
        $this->setUpDatabase();
    }

    /**
     * テスト用のDBを作成する
     */
    public function setUpDatabase()
    {
        try {
            $this->pdo = new PDO('mysql:host='.$_SERVER['XOOPS_TEST_DB_HOST'], $_SERVER['XOOPS_TEST_DB_USER'], $_SERVER['XOOPS_TEST_DB_PASS']);
            $this->pdo->query('DROP DATABASE IF EXISTS '.$_SERVER['XOOPS_TEST_DB_NAME']);
            $this->pdo->query('CREATE DATABASE '.$_SERVER['XOOPS_TEST_DB_NAME']);
            $this->pdo->query('USE '.$_SERVER['XOOPS_TEST_DB_NAME']);
        } catch ( \Exception $e ) {
            $this->markTestSkipped("Cannot connect to database.");
        }
    }

    /**
     * @param $expect
     * @param $filename
     */
    public function assertFileContentsSame($expect, $filename)
    {
        $contents = file_get_contents($filename);
        $this->assertSame($expect, $contents);
    }

    /**
     * @param $filename
     */
    public function assertNotWritable($filename)
    {
        $this->assertFalse(is_writable($filename));
    }

    /**
     * @param $tableName
     */
    public function assertTableExists($tableName)
    {
        $this->assertContains($tableName, $this->pdo->query('SHOW TABLES')->fetchAll(PDO::FETCH_COLUMN));
    }

    /**
     * @param $expect
     * @param $tableName
     */
    public function assertTableEquals($expect, $tableName)
    {
        $this->assertSame($expect, $this->pdo->query('SELECT * FROM '.$tableName)->fetchAll(PDO::FETCH_NUM));
    }

    /**
     * @param $count
     * @param $tableName
     */
    public function assertTableRowCount($count, $tableName)
    {
        $this->assertEquals($count, $this->pdo->query('SELECT COUNT(*) FROM '.$tableName)->fetch(PDO::FETCH_COLUMN));
    }

    /**
     * @param $expect
     * @param $uid
     * @param $tableName
     */
    public function assertUserTableContains($expect, $uid, $tableName)
    {
        $columns = array_keys($expect);
        $query = sprintf('SELECT %s FROM %s WHERE uid = %s', implode(',', $columns), $tableName, $uid);
        $row = $this->pdo->query($query)->fetch(PDO::FETCH_ASSOC);
        $this->assertEquals($expect, $row);
    }

    /**
     * @return \Momoxo\Installer\ValueObject\Site
     */
    public function getSite()
    {
        $db = new Database();
        $db
            ->setType('mysql')
            ->setHost($_SERVER['XOOPS_TEST_DB_HOST'])
            ->setUser($_SERVER['XOOPS_TEST_DB_USER'])
            ->setPassword($_SERVER['XOOPS_TEST_DB_PASS'])
            ->setName($_SERVER['XOOPS_TEST_DB_NAME'])
            ->setPrefix('momoxo')
            ->disablePermanentConnection();

        $admin = new Admin();
        $admin
            ->setUsername('alice')
            ->setEmail('alice@example.com')
            ->setPassword('p@ssW0rd')
            ->setUrl('http://example.com/')
            ->setTimezoneOffset(+9.0);

        $site = new Site();
        $site
            ->setRootPath('/path/to/root/path')
            ->setTrustPath('/path/to/trust/path')
            ->setUrl('http://example.com')
            ->setSalt('salt')
            ->setDB($db)
            ->setAdmin($admin);

        return $site;
    }

    /**
     * @return string
     */
    public static function getConfig()
    {
        return "<?php
define('XOOPS_ROOT_PATH', '/path/to/root/path');
define('XOOPS_TRUST_PATH', '/path/to/trust/path');
define('XOOPS_URL', 'http://example.com');
define('XOOPS_SALT', 'salt');
define('XOOPS_DB_TYPE', 'mysql');
define('XOOPS_DB_PREFIX', 'momoxo');
define('XOOPS_DB_HOST', '".$_SERVER['XOOPS_TEST_DB_HOST']."');
define('XOOPS_DB_USER', '".$_SERVER['XOOPS_TEST_DB_USER']."');
define('XOOPS_DB_PASS', '".$_SERVER['XOOPS_TEST_DB_PASS']."');
define('XOOPS_DB_NAME', '".$_SERVER['XOOPS_TEST_DB_NAME']."');
define('XOOPS_DB_PCONNECT', 0);";
    }

    /**
     * @return string
     */
    public function createDummySchemaFile()
    {
        $dir = SandboxDirectoryManager::getSandboxDirectory();
        $schemaFile = $dir.'/schema.sql';
        file_put_contents($schemaFile, "
            CREATE TABLE foo (
              foo varchar(255)
            );
            CREATE TABLE users (
              uid mediumint(8) unsigned NOT NULL auto_increment,
              name varchar(60) NOT NULL default '',
              uname varchar(25) NOT NULL default '',
              email varchar(255) NOT NULL default '',
              url varchar(100) NOT NULL default '',
              user_avatar varchar(30) NOT NULL default 'blank.gif',
              user_regdate int(10) unsigned NOT NULL default '0',
              user_icq varchar(15) NOT NULL default '',
              user_from varchar(100) NOT NULL default '',
              user_sig tinytext NOT NULL,
              user_viewemail tinyint(1) unsigned NOT NULL default '0',
              actkey varchar(8) NOT NULL default '',
              user_aim varchar(18) NOT NULL default '',
              user_yim varchar(25) NOT NULL default '',
              user_msnm varchar(100) NOT NULL default '',
              pass varchar(32) NOT NULL default '',
              posts mediumint(8) unsigned NOT NULL default '0',
              attachsig tinyint(1) unsigned NOT NULL default '0',
              rank smallint(5) unsigned NOT NULL default '0',
              level tinyint(3) unsigned NOT NULL default '1',
              theme varchar(100) NOT NULL default '',
              timezone_offset float(3,1) NOT NULL default '0.0',
              last_login int(10) unsigned NOT NULL default '0',
              umode varchar(10) NOT NULL default '',
              uorder tinyint(1) unsigned NOT NULL default '0',
              notify_method tinyint(1) NOT NULL default '1',
              notify_mode tinyint(1) NOT NULL default '0',
              user_occ varchar(100) NOT NULL default '',
              bio tinytext NOT NULL,
              user_intrest varchar(150) NOT NULL default '',
              user_mailok tinyint(1) unsigned NOT NULL default '1',
              PRIMARY KEY  (uid),
              KEY uname (uname),
              KEY email (email),
              KEY uiduname (uid,uname),
              KEY unamepass (uname,pass)
            ) ENGINE=InnoDB;");

        return $schemaFile;
    }

    /**
     * @return string
     */
    public function createDummyDataFile()
    {
        $dir = SandboxDirectoryManager::getSandboxDirectory();
        $dataFile = $dir.'/data.sql';

        file_put_contents($dataFile, "
            INSERT INTO foo (foo) VALUES ('dummy1');
            INSERT INTO foo (foo) VALUES ('dummy2');
            INSERT INTO foo (foo) VALUES ('dummy3');");

        return $dataFile;
    }

    public function testConstruct()
    {
        $configFilename = SandboxDirectoryManager::getSandboxDirectory().'/config.php';
        $encryptor = new MD5PasswordEncryptor();

        $schemeFile = $this->createDummySchemaFile();
        $dataFile   = $this->createDummyDataFile();

        $service = new SiteConstructionService();
        $service
            ->setConfigFilename($configFilename)
            ->setFormatter(new ConstantFormatter)
            ->setConnectionFactory(new ConnectionFactory)
            ->setSqlUtility(new SqlUtility)
            ->setEncryptor($encryptor)
            ->setSchemaFile($schemeFile)
            ->setDataFile($dataFile)
            ->construct($this->getSite());

        $this->assertFileExists($configFilename);
        $this->assertFileContentsSame($this->getConfig(), $configFilename);
        $this->assertTableExists('momoxo_foo');
        $this->assertTableExists('momoxo_users');
        $this->assertTableEquals(array(
            array('dummy1'),
            array('dummy2'),
            array('dummy3'),
        ), 'momoxo_foo');
        $this->assertTableRowCount(1, 'momoxo_users');
        $this->assertUserTableContains(array(
            'uid'             => '1',
            'uname'           => 'alice',
            'email'           => 'alice@example.com',
            'pass'            => $encryptor->encrypt('p@ssW0rd'),
            'url'             => 'http://example.com/',
            'timezone_offset' => '9.0',
        ), 1, 'momoxo_users');
    }

    public function testConstructThrowsExceptionWhenFailedToWriteConfig()
    {
        $configDirectory = SandboxDirectoryManager::getSandboxDirectory();
        chmod($configDirectory, 0444);
        $this->assertNotWritable($configDirectory);

        $configFilename = $configDirectory.'/config.php';

        $this->setExpectedException(
            'Momoxo\Installer\Service\ServiceException',
            sprintf("Failed to create config file: %s", $configFilename)
        );

        $service = new SiteConstructionService();
        $service
            ->setConfigFilename($configFilename)
            ->setFormatter(new ConstantFormatter)
            ->construct($this->getSite());
    }

    public function testConstructRemoveConfigFileWhenDatabaseProcessFails()
    {
        $configFilename = SandboxDirectoryManager::getSandboxDirectory().'/config.php';

        // ConnectionFactoryはモック
        $exception = new \Exception('Database Error');
        $connectionFactory = $this->getMock('Momoxo\Installer\Database\ConnectionFactory');
        $connectionFactory
            ->expects($this->once())
            ->method('createWithDatabase')
            ->will($this->throwException($exception));

        try {
            $service = new SiteConstructionService();
            $service
                ->setConfigFilename($configFilename)
                ->setFormatter(new ConstantFormatter)
                ->setConnectionFactory($connectionFactory)
                ->construct($this->getSite());

        } catch ( \Exception $e ) {
            $this->assertSame($exception, $e);
        }

        $this->assertFileNotExists($configFilename);
    }
}
