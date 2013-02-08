<?php

namespace Momoxo\Installer\Requirement;

/**
 * ファイル書き込み権限要件
 */
class FileWritableRequirement
{
    /**
     * Find not writable files from required file list
     * @param  string[] $requiredFiles
     * @return string[]
     */
    public function getUnsatisfiedBy(array $requiredFiles)
    {
        $notWritableFiles = array();

        foreach ($requiredFiles as $requiredFile) {
            if (is_writable($requiredFile) === false) {
                $notWritableFiles[] = $requiredFile;
            }
        }

        return $notWritableFiles;
    }
}
