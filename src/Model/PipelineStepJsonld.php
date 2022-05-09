<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class PipelineStepJsonld
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var mixed
     */
    protected $context;
    /**
     * @var string
     */
    protected $id2;
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
     * @var AbstractPipelineJsonld
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

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
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

    public function getId2(): string
    {
        return $this->id2;
    }

    public function setId2(string $id2): self
    {
        $this->id2 = $id2;

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

    public function getPipeline(): AbstractPipelineJsonld
    {
        return $this->pipeline;
    }

    public function setPipeline(AbstractPipelineJsonld $pipeline): self
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
