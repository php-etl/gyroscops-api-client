<?php

namespace Gyroscops\Api\Model;

class PipelineMoveBeforePipelineStepCommandInput
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
    protected $next;
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
    public function getNext() : string
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param string $next
     *
     * @return self
     */
    public function setNext(string $next) : self
    {
        $this->next = $next;
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