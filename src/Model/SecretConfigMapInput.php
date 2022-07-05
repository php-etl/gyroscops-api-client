<?php

namespace Gyroscops\Api\Model;

class SecretConfigMapInput
{
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
     * @var ConfigMapValueInput
     */
    protected $configs;
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
     * @return ConfigMapValueInput
     */
    public function getConfigs() : ConfigMapValueInput
    {
        return $this->configs;
    }
    /**
     * 
     *
     * @param ConfigMapValueInput $configs
     *
     * @return self
     */
    public function setConfigs(ConfigMapValueInput $configs) : self
    {
        $this->configs = $configs;
        return $this;
    }
}