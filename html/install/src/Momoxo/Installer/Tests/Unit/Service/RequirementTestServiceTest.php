<?php

namespace Momoxo\Installer\Tests\Unit\Service;

use Momoxo\Installer\Requirement\PHPExtensionRequirement;
use Momoxo\Installer\Requirement\FileWritableRequirement;
use Momoxo\Installer\DataTransferObject\RequirementTestDTO;
use Momoxo\Installer\Service\RequirementTestService;

class RequirementTestServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testComponentCalls()
    {
        // Stubs
        $phpExtensionRequirementStub = $this->getMock('Momoxo\Installer\Requirement\PHPExtensionRequirement');
        $fileWritableRequirementStub = $this->getMock('Momoxo\Installer\Requirement\FileWritableRequirement');

        // Dummy variables
        $requiredExtensions = array('mbstring', 'curl', 'mysql');
        $missingExtensions  = array('curl');
        $requiredWritable = array('file', 'dir1', 'dir2');
        $notWritableFiles = array('dir2');

        // Calling component scenario
        $phpExtensionRequirementStub
            ->expects($this->once())
            ->method('getUnsatisfiedBy')
            ->with($requiredExtensions)
            ->will($this->returnValue($missingExtensions));
        $fileWritableRequirementStub
            ->expects($this->once())
            ->method('getUnsatisfiedBy')
            ->with($requiredWritable)
            ->will($this->returnValue($notWritableFiles));

        // Test
        $requirementTestService = new RequirementTestService();
        $requirementTestService
            ->setPHPExtensionRequirement($phpExtensionRequirementStub)
            ->setFileWritableRequirement($fileWritableRequirementStub);

        $dto = new RequirementTestDTO(array(
            'php_extension' => $requiredExtensions,
            'writable'      => $requiredWritable,
        ));
        $requirementTestService->test($dto);
        $this->assertSame($missingExtensions, $dto->getMissingPHPExtensions());
        $this->assertSame($notWritableFiles, $dto->getNotWritableFiles());
    }
}
