<?php

namespace Gyroscops\Api\Model;

class ExecutionPipelineStepJsonld
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
     * @var AbstractPipelineJsonld
     */
    protected $pipeline;
    /**
     * 
     *
     * @var string[]
     */
    protected $metrics;
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
    public function getMetrics() : array
    {
        return $this->metrics;
    }
    /**
     * 
     *
     * @param string[] $metrics
     *
     * @return self
     */
    public function setMetrics(array $metrics) : self
    {
        $this->metrics = $metrics;
        return $this;
    }
}