<?php

namespace Momoxo\Installer\Security;

interface PasswordEncryptorInterface
{
    /**
     * Encrypt the password
     * @param  string $password
     * @return string
     */
    public function encrypt($password);
}
