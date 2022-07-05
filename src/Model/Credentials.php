<?php

namespace Gyroscops\Api\Model;

class Credentials
{
    /**
     * 
     *
     * @var string
     */
    protected $username;
    /**
     * 
     *
     * @var string
     */
    protected $password;
    /**
     * 
     *
     * @var string
     */
    protected $workspace;
    /**
     * 
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->username = $username;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
     * 
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password) : self
    {
        $this->password = $password;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWorkspace() : string
    {
        return $this->workspace;
    }
    /**
     * 
     *
     * @param string $workspace
     *
     * @return self
     */
    public function setWorkspace(string $workspace) : self
    {
        $this->workspace = $workspace;
        return $this;
    }
}