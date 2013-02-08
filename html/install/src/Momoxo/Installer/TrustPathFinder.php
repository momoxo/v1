<?php

namespace Momoxo\Installer;

class TrustPathFinder
{
    /**
     * @var string[]
     */
    private $candidates =array(
        '/../xoops_trust_path',
        '/xoops_trust_path',
    );

    /**
     * @param  string      $rootPath
     * @return bool|string
     */
    public function find($rootPath)
    {
        foreach ($this->candidates as $candidate) {
            $candidate = $rootPath.$candidate;
            if (is_dir($candidate)) {
                return realpath($candidate);
            }
        }

        return false;
    }
}
