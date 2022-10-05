<?php

namespace Gyroscops\Api\Model;

class ExecutionResumePipelineExecutionCommandInput
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
