<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ExecutionWorkflowJobAction
{
    /**
     * @var string|null
     */
    protected $job;
    /**
     * @var string|null
     */
    protected $id;

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
}
