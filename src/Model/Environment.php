<?php

namespace Gyroscops\Api\Model;

class Environment
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
     * @var Variable[]
     */
    protected $variables;
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
     * @return Variable[]
     */
    public function getVariables() : array
    {
        return $this->variables;
    }
    /**
     * 
     *
     * @param Variable[] $variables
     *
     * @return self
     */
    public function setVariables(array $variables) : self
    {
        $this->variables = $variables;
        return $this;
    }
}