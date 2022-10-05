<?php

namespace Gyroscops\Api\Model;

class ExecutionInterruptPipelineExecutionCommandInput
{
    /**
     * @var string
     */
    protected $execution;

    public function getExecution(): string
    {
        return $this->execution;
    }

    public function setExecution(string $execution): self
    {
        $this->execution = $execution;

        return $this;
    }
}
