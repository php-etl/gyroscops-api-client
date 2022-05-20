<?php

namespace Gyroscops\Api\Model;

class VariableFromConfigMap
{
    /**
     * 
     *
     * @var string|null
     */
    protected $configMap;
    /**
     * 
     *
     * @var string
     */
    protected $item;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $environment;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @return string|null
     */
    public function getConfigMap() : ?string
    {
        return $this->configMap;
    }
    /**
     * 
     *
     * @param string|null $configMap
     *
     * @return self
     */
    public function setConfigMap(?string $configMap) : self
    {
        $this->configMap = $configMap;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getItem() : string
    {
        return $this->item;
    }
    /**
     * 
     *
     * @param string $item
     *
     * @return self
     */
    public function setItem(string $item) : self
    {
        $this->item = $item;
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
     * @return string|null
     */
    public function getEnvironment() : ?string
    {
        return $this->environment;
    }
    /**
     * 
     *
     * @param string|null $environment
     *
     * @return self
     */
    public function setEnvironment(?string $environment) : self
    {
        $this->environment = $environment;
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
}