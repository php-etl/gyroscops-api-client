<?php

namespace Gyroscops\Api\Model;

class StepInputJsonld
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
    protected $code;
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var string[][]
     */
    protected $config;
    /**
     * 
     *
     * @var ProbeJsonld[]
     */
    protected $probes;
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
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return string[][]
     */
    public function getConfig() : iterable
    {
        return $this->config;
    }
    /**
     * 
     *
     * @param string[][] $config
     *
     * @return self
     */
    public function setConfig(iterable $config) : self
    {
        $this->config = $config;
        return $this;
    }
    /**
     * 
     *
     * @return ProbeJsonld[]
     */
    public function getProbes() : array
    {
        return $this->probes;
    }
    /**
     * 
     *
     * @param ProbeJsonld[] $probes
     *
     * @return self
     */
    public function setProbes(array $probes) : self
    {
        $this->probes = $probes;
        return $this;
    }
}