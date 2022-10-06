<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ExecutionPipelineStep
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var AbstractPipeline|null
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
        $this->id = $id;

        return $this;
    }

    public function getPipeline(): ?AbstractPipeline
    {
        return $this->pipeline;
    }

    public function setPipeline(?AbstractPipeline $pipeline): self
    {
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
        $this->metrics = $metrics;

        return $this;
    }
}
