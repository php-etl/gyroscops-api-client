<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class WorkflowJobPipelineJsonldJobRead extends \ArrayObject
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
     * @var WorkflowJobJsonldJobRead|null
     */
    protected $job;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $label;
    /**
     * @var PipelineStepJsonldJobRead[]|null
     */
    protected $steps;

    public function getContext()
    {
        return $this->context;
    }

    public function setContext($context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getJob(): ?WorkflowJobJsonldJobRead
    {
        return $this->job;
    }

    public function setJob(?WorkflowJobJsonldJobRead $job): self
    {
        $this->initialized['job'] = true;
        $this->job = $job;

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
     * @return PipelineStepJsonldJobRead[]|null
     */
    public function getSteps(): ?array
    {
        return $this->steps;
    }

    /**
     * @param PipelineStepJsonldJobRead[]|null $steps
     */
    public function setSteps(?array $steps): self
    {
        $this->initialized['steps'] = true;
        $this->steps = $steps;

        return $this;
    }
}
