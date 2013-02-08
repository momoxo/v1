<?php

namespace Momoxo\Installer\Service;

class ServiceException extends \RuntimeException
{
    public static function failedToCreateConfigFile($configFilename)
    {
        return new self(sprintf("Failed to create config file: %s", $configFilename));
    }
}
