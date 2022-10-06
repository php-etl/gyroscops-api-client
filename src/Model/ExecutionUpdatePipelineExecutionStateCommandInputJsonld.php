<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ExecutionUpdatePipelineExecutionStateCommandInputJsonld
{
    /**
     * @var mixed|null
     */
    protected $context;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $execution;
    /**
     * @var UpdateListJsonld|null
     */
    protected $stepsUpdates;

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param mixed $context
     */
    public function setContext($context): self
    {
        $this->context = $context;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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

    public function getStepsUpdates(): ?UpdateListJsonld
    {
        return $this->stepsUpdates;
    }

    public function setStepsUpdates(?UpdateListJsonld $stepsUpdates): self
    {
        $this->stepsUpdates = $stepsUpdates;

        return $this;
    }
}
