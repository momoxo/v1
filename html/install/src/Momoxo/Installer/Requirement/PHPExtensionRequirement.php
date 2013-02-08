<?php

namespace Momoxo\Installer\Requirement;

/**
 * PHP拡張要件
 */
class PHPExtensionRequirement
{
    /**
     * Return not loaded PHP extensions by required extension list
     * @param  string[] $requiredExtensions
     * @return string[]
     */
    public function getUnsatisfiedBy(array $requiredExtensions)
    {
        $unloadedExtensions = array();

        foreach ($requiredExtensions as $requiredExtension) {
            if (extension_loaded($requiredExtension) === false) {
                $unloadedExtensions[] = $requiredExtension;
            }
        }

        return $unloadedExtensions;
    }
}
