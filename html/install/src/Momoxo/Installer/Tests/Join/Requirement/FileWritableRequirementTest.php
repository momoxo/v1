<?php

namespace Momoxo\Installer\Tests\Join\Requirement;

use Momoxo\Installer\Requirement\FileWritableRequirement;
use Momoxo\Installer\Tests\SandboxDirectoryManager;

/**
 * This join test tests integration between FileWritableRequirement object and the file system.
 */
class FileWritableRequirementTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        SandboxDirectoryManager::resetSandboxDirectory();
    }

    /**
     * Return read only file paths
     * @return string[]
     */
    public function getReadOnlyFiles()
    {
        $dir = SandboxDirectoryManager::getSandboxDirectory();
        $readOnlyDir  = $dir.'/read-only-dir';
        $readOnlyFile = $dir.'/read-only-file';

        mkdir($readOnlyDir);
        chmod($readOnlyDir, 0444);
        $this->assertFalse(is_writable($readOnlyDir));

        touch($readOnlyFile);
        chmod($readOnlyFile, 0444);
        $this->assertFalse(is_writable($readOnlyFile));

        return array(
            $readOnlyDir,
            $readOnlyFile,
        );
    }

    public function getWritableFiles()
    {
        $dir = SandboxDirectoryManager::getSandboxDirectory();
        $writableDir  = $dir.'/writable-dir';
        $writableFile = $dir.'/writable-file';

        mkdir($writableDir);
        chmod($writableDir, 0777);
        $this->assertTrue(is_writable($writableDir));

        touch($writableFile);
        chmod($writableFile, 0777);
        $this->assertTrue(is_writable($writableFile));

        return array(
            $writableDir,
            $writableFile,
        );
    }

    public function testWithReadOnlyFiles()
    {
        $readOnlyFiles = $this->getReadOnlyFiles();
        $requirement = new FileWritableRequirement();
        $this->assertSame($readOnlyFiles, $requirement->getUnsatisfiedBy($readOnlyFiles));
    }

    public function testWitWritableFiles()
    {
        $writableFiles = $this->getWritableFiles();
        $emptyArray = array();
        $requirement = new FileWritableRequirement();
        $this->assertSame($emptyArray, $requirement->getUnsatisfiedBy($writableFiles));
    }
}
