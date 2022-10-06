<?php

namespace Gyroscops\Api\Model;

class StepInput
{
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $label;
    /**
     * @var string[][]|null
     */
    protected $config;
    /**
     * @var Probe[]|null
     */
    protected $probes;

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
     * @return string[][]|null
     */
    public function getConfig(): ?iterable
    {
        return $this->config;
    }

    /**
     * @param string[][]|null $config
     */
    public function setConfig(?iterable $config): self
    {
        $this->config = $config;

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
