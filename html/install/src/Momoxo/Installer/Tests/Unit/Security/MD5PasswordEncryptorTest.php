<?php

namespace Momoxo\Installer\Tests\Unit\Security;

use Momoxo\Installer\Security\MD5PasswordEncryptor;

class MD5PasswordEncryptorTest extends \PHPUnit_Framework_TestCase
{
    public function testEncrypt()
    {
        $encryptor = new MD5PasswordEncryptor();
        $this->assertSame(md5('p@ssW0rd'), $encryptor->encrypt('p@ssW0rd'));
    }
}
