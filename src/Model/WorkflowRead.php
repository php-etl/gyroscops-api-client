<?php

namespace Gyroscops\Api\Model;

class WorkflowRead
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var WorkflowJobRead[]
     */
    protected $jobs;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return WorkflowJobRead[]
     */
    public function getJobs(): array
    {
        return $this->jobs;
    }

    /**
     * @param WorkflowJobRead[] $jobs
     */
    public function setJobs(array $jobs): self
    {
        $this->jobs = $jobs;

        return $this;
    }
}
