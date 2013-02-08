<?php

namespace Momoxo\Installer\ValueObject;

class Admin
{
    /** @var string */
    private $username;
    /** @var string */
    private $password;
    /** @var string */
    private $email;
    /** @var float */
    private $timezoneOffset;
    /** @var string */
    private $url;
    /** @var int */
    private $lastLogin;
    /** @var int */
    private $registeredDate;

    public function __construct()
    {
        $this->lastLogin = time();
        $this->registeredDate = time();
    }

    /**
     * @param  string $username
     * @return Admin
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param  string $password
     * @return Admin
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
     * @param  string $email
     * @return Admin
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param  float $timezoneOffset
     * @return Admin
     */
    public function setTimezoneOffset($timezoneOffset)
    {
        $this->timezoneOffset = $timezoneOffset;

        return $this;
    }

    /**
     * @return float
     */
    public function getTimezoneOffset()
    {
        return $this->timezoneOffset;
    }

    /**
     * @param  string $url
     * @return Admin
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
     * @return int
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * @return int
     */
    public function getRegisteredDate()
    {
        return $this->registeredDate;
    }
}
