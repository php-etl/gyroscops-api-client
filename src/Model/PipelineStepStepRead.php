<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class PipelineStepStepRead extends \ArrayObject
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
     * @var int|null
     */
    protected $order;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $label;
    /**
     * @var mixed[]|null
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

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

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
    public function getProbes(): ?array
    {
        return $this->probes;
    }

    /**
     * @param string[]|null $probes
     */
    public function setProbes(?array $probes): self
    {
        $this->initialized['probes'] = true;
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
        $this->initialized['configuration'] = true;
        $this->configuration = $configuration;

        return $this;
    }
}
