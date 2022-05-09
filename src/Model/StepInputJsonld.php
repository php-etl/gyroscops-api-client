<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class StepInputJsonld
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
    protected $code;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string[]
     */
    protected $config;
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
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * @param string[] $config
     */
    public function setConfig(array $config): self
    {
        $this->config = $config;

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
