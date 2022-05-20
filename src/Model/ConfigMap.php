<?php

namespace Gyroscops\Api\Model;

class ConfigMap
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $organization;
    /**
     * 
     *
     * @var string
     */
    protected $workspace;
    /**
     * 
     *
     * @var mixed
     */
    protected $iterator;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganization() : string
    {
        return $this->organization;
    }
    /**
     * 
     *
     * @param string $organization
     *
     * @return self
     */
    public function setOrganization(string $organization) : self
    {
        $this->organization = $organization;
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
    /**
     * 
     *
     * @return mixed
     */
    public function getIterator()
    {
        return $this->iterator;
    }
    /**
     * 
     *
     * @param mixed $iterator
     *
     * @return self
     */
    public function setIterator($iterator) : self
    {
        $this->iterator = $iterator;
        return $this;
    }
}