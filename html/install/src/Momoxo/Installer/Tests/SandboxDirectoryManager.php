<?php

namespace Momoxo\Installer\Tests;

/**
 * 結合テストでファイルシステムと結合するときに使うサンドボックスディレクトリを管理する
 */
class SandboxDirectoryManager
{
    /**
     * Return sandbox directory
     * @return string
     */
    public static function getSandboxDirectory()
    {
        return sys_get_temp_dir().'/momoxo-test';
    }

    /**
     * Reset sandbox directory
     */
    public static function resetSandboxDirectory()
    {
        $sandboxDir = self::getSandboxDirectory();

        if ( file_exists($sandboxDir) ) {
            exec(sprintf('rm -rf %s', $sandboxDir));
        }

        if ( file_exists($sandboxDir) ) {
            throw new \RuntimeException(
                sprintf('Cannot continue test: sandbox directory already exists: %s', $sandboxDir)
            );
        }

        mkdir($sandboxDir, 0777, true);

        if ( file_exists($sandboxDir) === false ) {
            throw new \RuntimeException(
                sprintf('Cannot continue test: sandbox directory does not exist: %s', $sandboxDir)
            );
        }
    }
}
