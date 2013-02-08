<?php

namespace Momoxo\Installer\Tests\Join\Requirement;

use Momoxo\Installer\Requirement\PHPExtensionRequirement;

/**
 * This test integrates server's PHP configuration
 */
class PHPExtensionRequirementTest extends \PHPUnit_Framework_TestCase
{
    public function testLoadedExtensions()
    {
        $this->assertTrue(extension_loaded('json'));
        $this->assertTrue(extension_loaded('spl'));
        $this->assertTrue(extension_loaded('phar'));

        $requirement = new PHPExtensionRequirement();
        $this->assertSame(array(), $requirement->getUnsatisfiedBy(array('json', 'spl', 'phar')));
    }

    public function testUnloadedExtensions()
    {
        $this->assertFalse(extension_loaded('_dummy_extension_1_'));
        $this->assertFalse(extension_loaded('_dummy_extension_2_'));
        $this->assertFalse(extension_loaded('_dummy_extension_3_'));

        $requirement = new PHPExtensionRequirement();
        $this->assertSame(
            array('_dummy_extension_1_', '_dummy_extension_2_', '_dummy_extension_3_'),
            $requirement->getUnsatisfiedBy(
                array('_dummy_extension_1_', '_dummy_extension_2_', '_dummy_extension_3_')
            ));
    }
}
