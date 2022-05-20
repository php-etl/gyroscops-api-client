<?php

namespace Gyroscops\Api\Model;

class ExecutionTerminatePipelineExecutionCommandInput
{
    /**
     * 
     *
     * @var string
     */
    protected $execution;
    /**
     * 
     *
     * @var string
     */
    protected $reason;
    /**
     * 
     *
     * @return string
     */
    public function getExecution() : string
    {
        return $this->execution;
    }
    /**
     * 
     *
     * @param string $execution
     *
     * @return self
     */
    public function setExecution(string $execution) : self
    {
        $this->execution = $execution;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * 
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->reason = $reason;
        return $this;
    }
}