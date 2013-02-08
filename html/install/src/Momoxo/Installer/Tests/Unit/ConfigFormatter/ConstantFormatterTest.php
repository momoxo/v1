<?php

namespace Momoxo\Installer\Tests\Unit\ConfigFormatter;

use Momoxo\Installer\ValueObject\Site;
use Momoxo\Installer\ValueObject\Database;
use Momoxo\Installer\ConfigFormatter\ConstantFormatter;

class ConstantFormatterTest extends \PHPUnit_Framework_TestCase
{
    public static function getSite()
    {
        $db = new Database();
        $db
            ->setType('sqlite')
            ->setHost('127.0.0.1')
            ->setUser('dba')
            ->setPassword('p@ssW0rd')
            ->setName('momoxo')
            ->setPrefix('prefix')
            ->enablePermanentConnection();

        $site = new Site();
        $site
            ->setRootPath('/path/to/root/path')
            ->setTrustPath('/path/to/trust/path')
            ->setUrl('http://example.com')
            ->setSalt('salt')
            ->setDB($db);

        return $site;
    }

    public static function getConfig()
    {
        return "<?php
define('XOOPS_ROOT_PATH', '/path/to/root/path');
define('XOOPS_TRUST_PATH', '/path/to/trust/path');
define('XOOPS_URL', 'http://example.com');
define('XOOPS_SALT', 'salt');
define('XOOPS_DB_TYPE', 'sqlite');
define('XOOPS_DB_PREFIX', 'prefix');
define('XOOPS_DB_HOST', '127.0.0.1');
define('XOOPS_DB_USER', 'dba');
define('XOOPS_DB_PASS', 'p@ssW0rd');
define('XOOPS_DB_NAME', 'momoxo');
define('XOOPS_DB_PCONNECT', 1);";
    }

    public function testFormat()
    {
        $site = $this->getSite();
        $formatter = new ConstantFormatter();
        $formattedText = $formatter->format($site);
        $this->assertSame($this->getConfig(), $formattedText);
    }

    public function testGetExtension()
    {
        $formatter = new ConstantFormatter();
        $this->assertSame('php', $formatter->getExtension());
    }
}
