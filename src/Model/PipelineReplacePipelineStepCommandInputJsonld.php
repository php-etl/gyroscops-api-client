<?php

namespace Gyroscops\Api\Model;

class PipelineReplacePipelineStepCommandInputJsonld
{
    /**
     * @var mixed
     */
    protected $context;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $pipeline;
    /**
     * @var string
     */
    protected $former;
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string[]
     */
    protected $configuration;
    /**
     * @var ProbeJsonld[]
     */
    protected $probes;

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

    public function getPipeline(): string
    {
        return $this->pipeline;
    }

    public function setPipeline(string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getFormer(): string
    {
        return $this->former;
    }

    public function setFormer(string $former): self
    {
        $this->former = $former;

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

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

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

    /**
     * @return ProbeJsonld[]
     */
    public function getProbes(): array
    {
        return $this->probes;
    }

    /**
     * @param ProbeJsonld[] $probes
     */
    public function setProbes(array $probes): self
    {
        $this->probes = $probes;

        return $this;
    }
}
