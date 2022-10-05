<?php

namespace Gyroscops\Api\Model;

class StepInput
{
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string[][]
     */
    protected $config;
    /**
     * @var Probe[]
     */
    protected $probes;

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
     * @return string[][]
     */
    public function getConfig(): iterable
    {
        return $this->config;
    }

    /**
     * @param string[][] $config
     */
    public function setConfig(iterable $config): self
    {
        $this->config = $config;

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
