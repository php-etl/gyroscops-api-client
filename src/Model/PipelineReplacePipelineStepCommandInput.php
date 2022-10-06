<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class PipelineReplacePipelineStepCommandInput
{
    /**
     * @var string|null
     */
    protected $pipeline;
    /**
     * @var string|null
     */
    protected $former;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $label;
    /**
     * @var string[]|null
     */
    protected $configuration;
    /**
     * @var Probe[]|null
     */
    protected $probes;

    public function getPipeline(): ?string
    {
        return $this->pipeline;
    }

    public function setPipeline(?string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getFormer(): ?string
    {
        return $this->former;
    }

    public function setFormer(?string $former): self
    {
        $this->former = $former;

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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

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

    /**
     * @return Probe[]|null
     */
    public function getProbes(): ?array
    {
        return $this->probes;
    }

    /**
     * @param Probe[]|null $probes
     */
    public function setProbes(?array $probes): self
    {
        $this->probes = $probes;

        return $this;
    }
}
