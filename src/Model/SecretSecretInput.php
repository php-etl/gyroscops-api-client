<?php

namespace Gyroscops\Api\Model;

class SecretSecretInput
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
     * @var SecretValueInput
     */
    protected $secrets;
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
     * @return SecretValueInput
     */
    public function getSecrets() : SecretValueInput
    {
        return $this->secrets;
    }
    /**
     * 
     *
     * @param SecretValueInput $secrets
     *
     * @return self
     */
    public function setSecrets(SecretValueInput $secrets) : self
    {
        $this->secrets = $secrets;
        return $this;
    }
}