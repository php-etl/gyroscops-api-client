<?php

namespace Gyroscops\Api\Model;

class PipelineStepAddAfterPipelineStepCommand
{
    /**
     * 
     *
     * @var mixed
     */
    protected $id;
    /**
     * 
     *
     * @var mixed
     */
    protected $previous;
    /**
     * 
     *
     * @var mixed
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
    protected $configuration;
    /**
     * 
     *
     * @var ProbeList
     */
    protected $probes;
    /**
     * 
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPrevious()
    {
        return $this->previous;
    }
    /**
     * 
     *
     * @param mixed $previous
     *
     * @return self
     */
    public function setPrevious($previous) : self
    {
        $this->previous = $previous;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param mixed $code
     *
     * @return self
     */
    public function setCode($code) : self
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
    public function getConfiguration() : array
    {
        return $this->configuration;
    }
    /**
     * 
     *
     * @param string[] $configuration
     *
     * @return self
     */
    public function setConfiguration(array $configuration) : self
    {
        $this->configuration = $configuration;
        return $this;
    }
    /**
     * 
     *
     * @return ProbeList
     */
    public function getProbes() : ProbeList
    {
        return $this->probes;
    }
    /**
     * 
     *
     * @param ProbeList $probes
     *
     * @return self
     */
    public function setProbes(ProbeList $probes) : self
    {
        $this->probes = $probes;
        return $this;
    }
}