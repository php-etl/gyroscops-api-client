<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ExecutionWorkflow
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string[]|null
     */
    protected $jobs;
    /**
     * @var string|null
     */
    protected $execution;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getJobs(): ?array
    {
        return $this->jobs;
    }

    /**
     * @param string[]|null $jobs
     */
    public function setJobs(?array $jobs): self
    {
        $this->jobs = $jobs;

        return $this;
    }

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
