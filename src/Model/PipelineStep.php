<?php

namespace Gyroscops\Api\Model;

class PipelineStep
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
     * @var int
     */
    protected $order;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var AbstractPipeline
     */
    protected $pipeline;
    /**
     * @var string[]
     */
    protected $probes;
    /**
     * @var string[]
     */
    protected $configuration;

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

    public function getOrder(): int
    {
        return $this->order;
    }

    public function setOrder(int $order): self
    {
        $this->order = $order;

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

    public function getPipeline(): AbstractPipeline
    {
        return $this->pipeline;
    }

    public function setPipeline(AbstractPipeline $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getProbes(): array
    {
        return $this->probes;
    }

    /**
     * @param string[] $probes
     */
    public function setProbes(array $probes): self
    {
        $this->probes = $probes;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getConfiguration(): array
    {
        return $this->configuration;
    }

    /**
     * @param string[] $configuration
     */
    public function setConfiguration(array $configuration): self
    {
        $this->configuration = $configuration;

        return $this;
    }
}
