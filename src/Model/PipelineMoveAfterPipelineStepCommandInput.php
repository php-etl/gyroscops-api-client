<?php

namespace Gyroscops\Api\Model;

class PipelineMoveAfterPipelineStepCommandInput
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
}