<?php

namespace Gyroscops\Api\Model;

class ExecutionActionRead
{
    /**
     * @var string|null
     */
    protected $id;

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
