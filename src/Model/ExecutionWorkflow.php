<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ExecutionWorkflow
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string[]
     */
    protected $jobs;
    /**
     * @var string
     */
    protected $execution;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getJobs(): array
    {
        return $this->jobs;
    }

    /**
     * @param string[] $jobs
     */
    public function setJobs(array $jobs): self
    {
        $this->jobs = $jobs;

        return $this;
    }

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
