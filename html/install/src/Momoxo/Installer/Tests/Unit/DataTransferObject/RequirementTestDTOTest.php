<?php

namespace Momoxo\Installer\Tests\Unit\DataTransferObject;

use Momoxo\Installer\DataTransferObject\RequirementTestDTO;

class RequirementTestDTOTest extends \PHPUnit_Framework_TestCase
{
    public function test__construct()
    {
        $dto = new RequirementTestDTO(array(
            '_dummy_value_',
            '_dummy_value_',
            '_dummy_value_',
        ));
        $this->assertSame(array(
            '_dummy_value_',
            '_dummy_value_',
            '_dummy_value_',
        ), $dto->getConfig());
    }

    public function testMissingPHPExtensions()
    {
        $emptyArray = array();

        $dto = new RequirementTestDTO(array('dummy_config'));
        $this->assertSame($emptyArray, $dto->getMissingPHPExtensions());

        $dto->setMissingPHPExtensions(array('mbstring', 'pdo', 'apc'));
        $this->assertSame(array('mbstring', 'pdo', 'apc'), $dto->getMissingPHPExtensions());

        $dto->setMissingPHPExtensions($emptyArray);
        $this->assertFalse($dto->hasMissingPHPExtensions());

        $dto->setMissingPHPExtensions(array('mbstring'));
        $this->assertTrue($dto->hasMissingPHPExtensions());
    }

    public function testNotWritableFiles()
    {
        $emptyArray = array();

        $dto = new RequirementTestDTO(array('dummy_config'));
        $this->assertSame($emptyArray, $dto->getNotWritableFiles());

        $dto->setNotWritableFiles(array('file', 'dir1', 'dir2'));
        $this->assertSame(array('file', 'dir1', 'dir2'), $dto->getNotWritableFiles());

        $dto->setNotWritableFiles($emptyArray);
        $this->assertFalse($dto->hasNotWritableFiles());

        $dto->setNotWritableFiles(array('file', 'dir1', 'dir2'));
        $this->assertTrue($dto->hasNotWritableFiles());
    }

    /**
     * @param bool  $expect
     * @param array $missingExtensions
     * @param array $notWritableFiles
     * @dataProvider dataForTestRequirementIsSatisfied
     */
    public function testRequirementIsSatisfied($expect, array $missingExtensions, array $notWritableFiles)
    {
        $dto = new RequirementTestDTO(array('dummy_config'));
        $dto
            ->setMissingPHPExtensions($missingExtensions)
            ->setNotWritableFiles($notWritableFiles);
        $this->assertSame($expect, $dto->requirementIsSatisfied());
    }

    public static function dataForTestRequirementIsSatisfied()
    {
        return array(
            array(
                true,
                array(),
                array(),
            ),
            array(
                false,
                array('missing_ext'),
                array(),
            ),
            array(
                false,
                array(),
                array('not_writable_file...'),
            ),
            array(
                false,
                array('missing_ext...'),
                array('not_writable_file...'),
            ),
        );
    }
}
