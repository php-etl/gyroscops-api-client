<?php

namespace Gyroscops\Api\Model;

class ExecutionPipelineJob
{
    /**
     * @var string|null
     */
    protected $job;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string[]|null
     */
    protected $steps;

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(?string $job): self
    {
        $this->job = $job;

        return $this;
    }

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
    public function getSteps(): ?array
    {
        return $this->steps;
    }

    /**
     * @param string[]|null $steps
     */
    public function setSteps(?array $steps): self
    {
        $this->steps = $steps;

        return $this;
    }
}
