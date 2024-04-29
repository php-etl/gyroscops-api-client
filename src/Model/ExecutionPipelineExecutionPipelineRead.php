<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ExecutionPipelineExecutionPipelineRead extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $execution;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string[]|null
     */
    protected $steps;

    public function getExecution(): ?string
    {
        return $this->execution;
    }

    public function setExecution(?string $execution): self
    {
        $this->initialized['execution'] = true;
        $this->execution = $execution;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
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
        $this->initialized['steps'] = true;
        $this->steps = $steps;

        return $this;
    }
}
