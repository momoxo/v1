<?php

namespace Momoxo\Installer\Service;

use Momoxo\Installer\Requirement\PHPExtensionRequirement;
use Momoxo\Installer\Requirement\FileWritableRequirement;
use Momoxo\Installer\DataTransferObject\RequirementTestDTO;

/**
 * 動作要件検証サービス
 */
class RequirementTestService
{
    /**
     * @var PHPExtensionRequirement
     */
    private $phpExtensionRequirement;

    /**
     * @var FileWritableRequirement
     */
    private $fileWritableRequirement;

    /**
     * @param  PHPExtensionRequirement $phpExtensionRequirement
     * @return RequirementTestService
     */
    public function setPHPExtensionRequirement(PHPExtensionRequirement $phpExtensionRequirement)
    {
        $this->phpExtensionRequirement = $phpExtensionRequirement;

        return $this;
    }

    /**
     * @param  FileWritableRequirement $fileWritableRequirement
     * @return RequirementTestService
     */
    public function setFileWritableRequirement(FileWritableRequirement $fileWritableRequirement)
    {
        $this->fileWritableRequirement = $fileWritableRequirement;

        return $this;
    }

    /**
     * Test requirement
     * @param RequirementTestDTO $dto
     */
    public function test(RequirementTestDTO $dto)
    {
        $config = $dto->getConfig();
        $missingExtensions = $this->phpExtensionRequirement->getUnsatisfiedBy($config['php_extension']);
        $notWritableFiles  = $this->fileWritableRequirement->getUnsatisfiedBy($config['writable']);
        $dto->setMissingPHPExtensions($missingExtensions);
        $dto->setNotWritableFiles($notWritableFiles);
    }
}
