<?php

namespace Momoxo\Installer\Tests\Join;

use Momoxo\Installer\TrustPathFinder;
use Momoxo\Installer\Tests\SandboxDirectoryManager;

/**
 * This join test integrate file system
 */
class TrustPathFinderTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        SandboxDirectoryManager::resetSandboxDirectory();
    }

    public function assertDirectoryExists($dir)
    {
        $this->assertTrue(is_dir($dir));
    }

    public function testTrustPathAsideRootPath()
    {
        $dir = SandboxDirectoryManager::getSandboxDirectory();
        $rootPath = $dir.'/html';
        $trustPath = $dir.'/xoops_trust_path';

        mkdir($rootPath, 0755, true);
        mkdir($trustPath, 0755, true);

        $rootPath = realpath($rootPath);
        $trustPath = realpath($trustPath);

        $this->assertDirectoryExists($rootPath);
        $this->assertDirectoryExists($trustPath);

        $finder = new TrustPathFinder();

        $this->assertSame($trustPath, $finder->find($rootPath));
    }

    public function testTrustPathInRootPath()
    {
        $dir = SandboxDirectoryManager::getSandboxDirectory();
        $rootPath = $dir.'/html';
        $trustPath = $dir.'/html/xoops_trust_path';

        mkdir($rootPath, 0755, true);
        mkdir($trustPath, 0755, true);

        $rootPath = realpath($rootPath);
        $trustPath = realpath($trustPath);

        $this->assertDirectoryExists($rootPath);
        $this->assertDirectoryExists($trustPath);

        $finder = new TrustPathFinder();
        $this->assertSame($trustPath, $finder->find($rootPath));
    }

    public function testTrustPathNotFound()
    {
        $dir = SandboxDirectoryManager::getSandboxDirectory();
        $rootPath = $dir.'/html';

        mkdir($rootPath, 0755, true);

        $rootPath = realpath($rootPath);

        $this->assertDirectoryExists($rootPath);

        $finder = new TrustPathFinder();

        $this->assertFalse($finder->find($rootPath));
    }
}
