<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class WorkflowJobPipelineRead
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $runtimeType;
    /**
     * @var string[]
     */
    protected $runtime;
    /**
     * @var string[]
     */
    protected $autoload;
    /**
     * @var string[]
     */
    protected $steps;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

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

    public function getRuntimeType(): string
    {
        return $this->runtimeType;
    }

    public function setRuntimeType(string $runtimeType): self
    {
        $this->runtimeType = $runtimeType;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRuntime(): array
    {
        return $this->runtime;
    }

    /**
     * @param string[] $runtime
     */
    public function setRuntime(array $runtime): self
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAutoload(): array
    {
        return $this->autoload;
    }

    /**
     * @param string[] $autoload
     */
    public function setAutoload(array $autoload): self
    {
        $this->autoload = $autoload;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSteps(): array
    {
        return $this->steps;
    }

    /**
     * @param string[] $steps
     */
    public function setSteps(array $steps): self
    {
        $this->steps = $steps;

        return $this;
    }
}
