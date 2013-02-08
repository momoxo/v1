<?php

namespace Momoxo\Installer\DataTransferObject;

/**
 * 動作要件検証サービスにおいて、プレゼンテーションレイヤ・ドメインレイヤ間のデータ転送を担う
 */
class RequirementTestDTO
{
    /**
     * @var array
     */
    private $requirementConfig = array();

    /**
     * @var string[]
     */
    private $missingPHPExtensions = array();

    /**
     * @var string[]
     */
    private $notWritableFiles = array();

    /**
     * Return new instance
     * @param array $requirementConfig
     */
    public function __construct(array $requirementConfig)
    {
        $this->requirementConfig = $requirementConfig;
    }

    /**
     * Return config
     * @return array
     */
    public function getConfig()
    {
        return $this->requirementConfig;
    }

    /**
     * Set missing PHP extensions
     * @param  string[]           $missingPHPExtensions
     * @return RequirementTestDTO
     */
    public function setMissingPHPExtensions(array $missingPHPExtensions)
    {
        $this->missingPHPExtensions = $missingPHPExtensions;

        return $this;
    }

    /**
     * Return missing PHP extensions
     * @return string[]
     */
    public function getMissingPHPExtensions()
    {
        return $this->missingPHPExtensions;
    }

    /**
     * Determine if missing PHP extensions exist
     * @return bool
     */
    public function hasMissingPHPExtensions()
    {
        return ( count($this->missingPHPExtensions) > 0 );
    }

    /**
     * Set not writable file paths
     * @param  string[]           $notWritableFiles
     * @return RequirementTestDTO
     */
    public function setNotWritableFiles(array $notWritableFiles)
    {
        $this->notWritableFiles = $notWritableFiles;

        return $this;
    }

    /**
     * Return not writable file paths
     * @return string[]
     */
    public function getNotWritableFiles()
    {
        return $this->notWritableFiles;
    }

    /**
     * Determine if not writable files exist
     * @return bool
     */
    public function hasNotWritableFiles()
    {
        return ( count($this->notWritableFiles) > 0 );
    }

    /**
     * Determine if the requirement is satisfied
     * @return bool
     */
    public function requirementIsSatisfied()
    {
        if ($this->hasMissingPHPExtensions()) {
            return false;
        }

        if ($this->hasNotWritableFiles()) {
            return false;
        }

        return true;
    }
}
