<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class PipelineStep
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var int|null
     */
    protected $order;
    /**
     * @var string|null
     */
    protected $label;
    /**
     * @var AbstractPipeline|null
     */
    protected $pipeline;
    /**
     * @var string[]|null
     */
    protected $probes;
    /**
     * @var string[]|null
     */
    protected $configuration;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

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
    public function getProbes(): ?array
    {
        return $this->probes;
    }

    /**
     * @param string[]|null $probes
     */
    public function setProbes(?array $probes): self
    {
        $this->probes = $probes;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getConfiguration(): ?array
    {
        return $this->configuration;
    }

    /**
     * @param string[]|null $configuration
     */
    public function setConfiguration(?array $configuration): self
    {
        $this->configuration = $configuration;

        return $this;
    }
}
