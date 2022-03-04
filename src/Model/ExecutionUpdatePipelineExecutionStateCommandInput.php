<?php

namespace Gyroscops\Api\Model;

class ExecutionUpdatePipelineExecutionStateCommandInput
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
     * @var UpdateList
     */
    protected $stepsUpdates;
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
     * @return UpdateList
     */
    public function getStepsUpdates() : UpdateList
    {
        return $this->stepsUpdates;
    }
    /**
     * 
     *
     * @param UpdateList $stepsUpdates
     *
     * @return self
     */
    public function setStepsUpdates(UpdateList $stepsUpdates) : self
    {
        $this->stepsUpdates = $stepsUpdates;
        return $this;
    }
}