<?php

namespace Gyroscops\Api\Model;

class PipelineReorderPipelineStepsCommandInput
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
     * @var string[]
     */
    protected $codes;
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
     * @return string[]
     */
    public function getCodes() : array
    {
        return $this->codes;
    }
    /**
     * 
     *
     * @param string[] $codes
     *
     * @return self
     */
    public function setCodes(array $codes) : self
    {
        $this->codes = $codes;
        return $this;
    }
}