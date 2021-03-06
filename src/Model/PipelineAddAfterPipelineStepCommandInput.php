<?php

namespace Gyroscops\Api\Model;

class PipelineAddAfterPipelineStepCommandInput
{
    /**
     * 
     *
     * @var string
     */
    protected $pipeline;
    /**
     * 
     *
     * @var string
     */
    protected $previous;
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
    protected $configuration;
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
    public function getPipeline() : string
    {
        return $this->pipeline;
    }
    /**
     * 
     *
     * @param string $pipeline
     *
     * @return self
     */
    public function setPipeline(string $pipeline) : self
    {
        $this->pipeline = $pipeline;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrevious() : string
    {
        return $this->previous;
    }
    /**
     * 
     *
     * @param string $previous
     *
     * @return self
     */
    public function setPrevious(string $previous) : self
    {
        $this->previous = $previous;
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
    public function getConfiguration() : iterable
    {
        return $this->configuration;
    }
    /**
     * 
     *
     * @param string[][] $configuration
     *
     * @return self
     */
    public function setConfiguration(iterable $configuration) : self
    {
        $this->configuration = $configuration;
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