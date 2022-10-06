<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ExecutionResumePipelineExecutionCommandInput
{
    /**
     * @var string|null
     */
    protected $execution;

    public function getExecution(): ?string
    {
        return $this->execution;
    }

    public function setExecution(?string $execution): self
    {
        $this->execution = $execution;

        return $this;
    }
}
