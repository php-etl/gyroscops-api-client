<?php

namespace Gyroscops\Api\Model;

class ContextJsonld
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
     * Returns the step used by this context.
     *
     * @var int
     */
    protected $step;
    /**
     * Returns whether this context uses a fixed scale and step.
     *
     * @var bool
     */
    protected $fixedScale;

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

    /**
     * Returns the step used by this context.
     */
    public function getStep(): int
    {
        return $this->step;
    }

    /**
     * Returns the step used by this context.
     */
    public function setStep(int $step): self
    {
        $this->step = $step;

        return $this;
    }

    /**
     * Returns whether this context uses a fixed scale and step.
     */
    public function getFixedScale(): bool
    {
        return $this->fixedScale;
    }

    /**
     * Returns whether this context uses a fixed scale and step.
     */
    public function setFixedScale(bool $fixedScale): self
    {
        $this->fixedScale = $fixedScale;

        return $this;
    }
}