<?php

namespace Gyroscops\Api\Model;

class ExecutionPipelineStepJsonld
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var mixed|null
     */
    protected $context;
    /**
     * @var string|null
     */
    protected $id2;
    /**
     * @var AbstractPipelineJsonld|null
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

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

    public function getId2(): ?string
    {
        return $this->id2;
    }

    public function setId2(?string $id2): self
    {
        $this->id2 = $id2;

        return $this;
    }

    public function getPipeline(): ?AbstractPipelineJsonld
    {
        return $this->pipeline;
    }

    public function setPipeline(?AbstractPipelineJsonld $pipeline): self
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
