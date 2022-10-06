<?php

namespace Gyroscops\Api\Model;

class ExecutionTerminatePipelineExecutionCommandInput
{
    /**
     * @var string|null
     */
    protected $execution;
    /**
     * @var string|null
     */
    protected $reason;

    public function getExecution(): ?string
    {
        return $this->execution;
    }

    public function setExecution(?string $execution): self
    {
        $this->execution = $execution;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }
}
