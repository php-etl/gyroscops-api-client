<?php

namespace Gyroscops\Api\Model;

class StepInput
{
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
     * @var string[]
     */
    protected $config;
    /**
     * 
     *
     * @var Probe[]
     */
    protected $probes;
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
     * @return string[]
     */
    public function getConfig() : array
    {
        return $this->config;
    }
    /**
     * 
     *
     * @param string[] $config
     *
     * @return self
     */
    public function setConfig(array $config) : self
    {
        $this->config = $config;
        return $this;
    }
    /**
     * 
     *
     * @return Probe[]
     */
    public function getProbes() : array
    {
        return $this->probes;
    }
    /**
     * 
     *
     * @param Probe[] $probes
     *
     * @return self
     */
    public function setProbes(array $probes) : self
    {
        $this->probes = $probes;
        return $this;
    }
}