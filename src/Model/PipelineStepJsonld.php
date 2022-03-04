<?php

namespace Gyroscops\Api\Model;

class PipelineStepJsonld
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
    protected $type;
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
    protected $id2;
    /**
     * 
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var int
     */
    protected $order;
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var AbstractPipelineJsonld
     */
    protected $pipeline;
    /**
     * 
     *
     * @var string[]
     */
    protected $probes;
    /**
     * 
     *
     * @var string[]
     */
    protected $configuration;
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
     * @return int
     */
    public function getOrder() : int
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param int $order
     *
     * @return self
     */
    public function setOrder(int $order) : self
    {
        $this->order = $order;
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
     * @return AbstractPipelineJsonld
     */
    public function getPipeline() : AbstractPipelineJsonld
    {
        return $this->pipeline;
    }
    /**
     * 
     *
     * @param AbstractPipelineJsonld $pipeline
     *
     * @return self
     */
    public function setPipeline(AbstractPipelineJsonld $pipeline) : self
    {
        $this->pipeline = $pipeline;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getProbes() : array
    {
        return $this->probes;
    }
    /**
     * 
     *
     * @param string[] $probes
     *
     * @return self
     */
    public function setProbes(array $probes) : self
    {
        $this->probes = $probes;
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
}