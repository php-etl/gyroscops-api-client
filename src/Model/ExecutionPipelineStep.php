<?php

namespace Gyroscops\Api\Model;

class ExecutionPipelineStep
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
     * @var AbstractPipeline
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
     * @return AbstractPipeline
     */
    public function getPipeline() : AbstractPipeline
    {
        return $this->pipeline;
    }
    /**
     * 
     *
     * @param AbstractPipeline $pipeline
     *
     * @return self
     */
    public function setPipeline(AbstractPipeline $pipeline) : self
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