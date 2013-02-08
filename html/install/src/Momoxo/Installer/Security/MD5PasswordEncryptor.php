<?php

namespace Momoxo\Installer\Security;

class MD5PasswordEncryptor implements PasswordEncryptorInterface
{
    /**
     * Encrypt the password
     * @param  string $password
     * @return string
     */
    public function encrypt($password)
    {
        return md5($password);
    }
}
