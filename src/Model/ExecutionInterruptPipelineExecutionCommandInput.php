<?php

namespace Gyroscops\Api\Model;

class ExecutionInterruptPipelineExecutionCommandInput
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
}