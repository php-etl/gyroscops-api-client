<?php

namespace Gyroscops\Api\Model;

class ExecutionUpdatePipelineExecutionStateCommandInput
{
    /**
     * @var string|null
     */
    protected $execution;
    /**
     * @var UpdateList|null
     */
    protected $stepsUpdates;

    public function getExecution(): ?string
    {
        return $this->execution;
    }

    public function setExecution(?string $execution): self
    {
        $this->execution = $execution;

        return $this;
    }

    public function getStepsUpdates(): ?UpdateList
    {
        return $this->stepsUpdates;
    }

    public function setStepsUpdates(?UpdateList $stepsUpdates): self
    {
        $this->stepsUpdates = $stepsUpdates;

        return $this;
    }
}
