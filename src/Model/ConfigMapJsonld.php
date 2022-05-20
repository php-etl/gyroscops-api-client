<?php

namespace Gyroscops\Api\Model;

class ConfigMapJsonld
{
    /**
     * 
     *
     * @var mixed
     */
    protected $context;
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
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $id2;
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
     * @var TraversableJsonld
     */
    protected $iterator;
    /**
     * 
     *
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }
    /**
     * 
     *
     * @param mixed $context
     *
     * @return self
     */
    public function setContext($context) : self
    {
        $this->context = $context;
        return $this;
    }
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
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId2() : string
    {
        return $this->id2;
    }
    /**
     * 
     *
     * @param string $id2
     *
     * @return self
     */
    public function setId2(string $id2) : self
    {
        $this->id2 = $id2;
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
     * @return TraversableJsonld
     */
    public function getIterator() : TraversableJsonld
    {
        return $this->iterator;
    }
    /**
     * 
     *
     * @param TraversableJsonld $iterator
     *
     * @return self
     */
    public function setIterator(TraversableJsonld $iterator) : self
    {
        $this->iterator = $iterator;
        return $this;
    }
}