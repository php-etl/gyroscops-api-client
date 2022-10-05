<?php

namespace Gyroscops\Api\Model;

class ExecutionDeclarePipelineExecutionCommandInput
{
    /**
     * @var string
     */
    protected $schedule;
    /**
     * @var string
     */
    protected $pipeline;

    public function getSchedule(): string
    {
        return $this->schedule;
    }

    public function setSchedule(string $schedule): self
    {
        $this->schedule = $schedule;

        return $this;
    }

    public function getPipeline(): string
    {
        return $this->pipeline;
    }

    public function setPipeline(string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }
}
