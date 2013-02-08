<?php

namespace Momoxo\Installer\Tests\Unit\HTTP;

use Momoxo\Installer\HTTP\Request;

class RequestTest extends \PHPUnit_Framework_TestCase
{
    public function testGetSiteUrlWithApacheSSL()
    {
        $_SERVER['HTTPS'] = 'on';
        $_SERVER['SERVER_NAME'] = 'apache.example.com';
        $_SERVER['SCRIPT_NAME'] = '/install/index.php';

        $request = new Request();
        $this->assertSame('https://apache.example.com', $request->getSiteUrl());
    }

    public function testGetSiteUrlWIthIIS_SSL()
    {
        $_SERVER['SSL'] = 'on';
        $_SERVER['SERVER_NAME'] = 'iis.example.com';
        $_SERVER['SCRIPT_NAME'] = '/install/index.php';

        $request = new Request();
        $this->assertSame('https://iis.example.com', $request->getSiteUrl());
    }

    public function testGetSiteUrlWithNotSSL()
    {
        $_SERVER['SERVER_NAME'] = 'example.com';
        $_SERVER['SCRIPT_NAME'] = '/install/index.php';
        $request = new Request();
        $this->assertSame('http://example.com', $request->getSiteUrl());
    }

    public function testGetSiteUrlWithSubDirectories()
    {
        $_SERVER['SERVER_NAME'] = 'example.com';
        $_SERVER['SCRIPT_NAME'] = '/sub/install/index.php';
        $request = new Request();
        $this->assertSame('http://example.com/sub', $request->getSiteUrl());
    }
}
