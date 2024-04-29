<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ExecutionPipelineStepExecutionPipelineStepRead extends \ArrayObject
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
    protected $id;
    /**
     * @var mixed[]|null
     */
    protected $pipeline;
    /**
     * @var string[]|null
     */
    protected $metrics;

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
     * @return mixed[]|null
     */
    public function getPipeline(): ?iterable
    {
        return $this->pipeline;
    }

    /**
     * @param mixed[]|null $pipeline
     */
    public function setPipeline(?iterable $pipeline): self
    {
        $this->initialized['pipeline'] = true;
        $this->pipeline = $pipeline;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }

    /**
     * @param string[]|null $metrics
     */
    public function setMetrics(?array $metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;

        return $this;
    }
}
