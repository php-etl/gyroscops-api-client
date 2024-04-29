<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class WorkflowJobPipelinePipelineRead extends \ArrayObject
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
     * @var string|null
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
     * @var string[]|null
     */
    protected $steps;

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(?string $job): self
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
        $this->initialized['steps'] = true;
        $this->steps = $steps;

        return $this;
    }
}
