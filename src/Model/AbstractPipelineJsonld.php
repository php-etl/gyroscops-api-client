<?php

namespace Gyroscops\Api\Model;

class AbstractPipelineJsonld
{
    /**
     * @var mixed|null
     */
    protected $context;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $id2;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $label;
    /**
     * @var string|null
     */
    protected $runtimeType;
    /**
     * @var string[]|null
     */
    protected $runtime;
    /**
     * @var string[]|null
     */
    protected $autoload;
    /**
     * @var string[]|null
     */
    protected $steps;

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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getId2(): ?string
    {
        return $this->id2;
    }

    public function setId2(?string $id2): self
    {
        $this->id2 = $id2;

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

    public function getRuntimeType(): ?string
    {
        return $this->runtimeType;
    }

    public function setRuntimeType(?string $runtimeType): self
    {
        $this->runtimeType = $runtimeType;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getRuntime(): ?array
    {
        return $this->runtime;
    }

    /**
     * @param string[]|null $runtime
     */
    public function setRuntime(?array $runtime): self
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAutoload(): ?array
    {
        return $this->autoload;
    }

    /**
     * @param string[]|null $autoload
     */
    public function setAutoload(?array $autoload): self
    {
        $this->autoload = $autoload;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getSteps(): ?array
    {
        return $this->steps;
    }

    /**
     * @param string[]|null $steps
     */
    public function setSteps(?array $steps): self
    {
        $this->steps = $steps;

        return $this;
    }
}
