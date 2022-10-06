<?php

namespace Gyroscops\Api\Model;

class ExecutionAction
{
    /**
     * @var string|null
     */
    protected $execution;
    /**
     * @var string|null
     */
    protected $id;

    public function getExecution(): ?string
    {
        return $this->execution;
    }

    public function setExecution(?string $execution): self
    {
        $this->execution = $execution;

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
