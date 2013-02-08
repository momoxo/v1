<?php

namespace Momoxo\Installer\ValueObject;

class Database
{
    /** @var string */
    private $type;
    /** @var string */
    private $prefix;
    /** @var string */
    private $host;
    /** @var string */
    private $user;
    /** @var string */
    private $password;
    /** @var string */
    private $name;
    /** @var bool */
    private $permanentConnection;

    /**
     * @param  string   $type
     * @return Database
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param  string   $prefix
     * @return Database
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param  string   $host
     * @return Database
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param  string   $user
     * @return Database
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param  string   $password
     * @return Database
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param  string   $name
     * @return Database
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Database
     */
    public function enablePermanentConnection()
    {
        $this->permanentConnection = true;

        return $this;
    }

    /**
     * @return Database
     */
    public function disablePermanentConnection()
    {
        $this->permanentConnection = false;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPermanentConnectionEnabled()
    {
        return $this->permanentConnection;
    }
}
