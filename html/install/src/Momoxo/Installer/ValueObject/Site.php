<?php

namespace Momoxo\Installer\ValueObject;

use Momoxo\Installer\ValueObject\Database;
use Momoxo\Installer\ValueObject\Admin;

/**
 * Site is aggregates root of database and admin
 */
class Site
{
    /** @var string */
    private $rootPath;
    /** @var string */
    private $trustPath;
    /** @var string */
    private $url;
    /** @var string */
    private $salt;
    /** @var Database */
    private $db;
    /** @var Admin */
    private $admin;

    /**
     * @param  string $rootPath
     * @return Site
     */
    public function setRootPath($rootPath)
    {
        $this->rootPath = $rootPath;

        return $this;
    }

    /**
     * @return string
     */
    public function getRootPath()
    {
        return $this->rootPath;
    }

    /**
     * @param  string $trustPath
     * @return Site
     */
    public function setTrustPath($trustPath)
    {
        $this->trustPath = $trustPath;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrustPath()
    {
        return $this->trustPath;
    }

    /**
     * @param  string $url
     * @return Site
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param  string $salt
     * @return Site
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param  Database $db
     * @return Site
     */
    public function setDB(Database $db)
    {
        $this->db = $db;

        return $this;
    }

    /**
     * @return Database
     */
    public function getDB()
    {
        return $this->db;
    }

    /**
     * @param  Admin $admin
     * @return Site
     */
    public function setAdmin(Admin $admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * @return Admin
     */
    public function getAdmin()
    {
        return $this->admin;
    }
}
