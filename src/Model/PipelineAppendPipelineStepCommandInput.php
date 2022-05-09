<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class PipelineAppendPipelineStepCommandInput
{
    /**
     * @var string
     */
    protected $pipeline;
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
     * @var Probe[]
     */
    protected $probes;

    public function getPipeline(): string
    {
        return $this->pipeline;
    }

    public function setPipeline(string $pipeline): self
    {
        $this->pipeline = $pipeline;

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
     * @return Probe[]
     */
    public function getProbes(): array
    {
        return $this->probes;
    }

    /**
     * @param Probe[] $probes
     */
    public function setProbes(array $probes): self
    {
        $this->probes = $probes;

        return $this;
    }
}
