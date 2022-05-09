<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ExecutionTerminatePipelineExecutionCommandInput
{
    /**
     * @var string
     */
    protected $execution;
    /**
     * @var string
     */
    protected $reason;

    public function getExecution(): string
    {
        return $this->execution;
    }

    public function setExecution(string $execution): self
    {
        $this->execution = $execution;

        return $this;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }
}
