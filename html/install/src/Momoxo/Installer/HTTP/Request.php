<?php

namespace Momoxo\Installer\HTTP;

class Request
{
    /**
     * Return site top page URL
     * @return string
     */
    public function getSiteUrl()
    {
        if ($this->isSSL()) {
            $scheme = 'https';
        } else {
            $scheme = 'http';
        }

        $hostname = $_SERVER['SERVER_NAME'];
        // installer の URL が http://example.com/install/index.php だから dirname 2回してる
        $path = dirname(dirname($_SERVER['SCRIPT_NAME']));

        $url = "$scheme://$hostname$path";
        $url = rtrim($url, '/');

        return $url;
    }

    /**
     * @return bool
     */
    private function isSSL()
    {
        if (isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on') {
            return true;
        }

        if (isset($_SERVER['SSL']) and $_SERVER['SSL'] == 'on') {
            return true;
        }

        return false;
    }
}
