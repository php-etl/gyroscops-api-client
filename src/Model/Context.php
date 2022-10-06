<?php

namespace Gyroscops\Api\Model;

class Context
{
    /**
     * Returns the step used by this context.
     *
     * @var int|null
     */
    protected $step;
    /**
     * Returns whether this context uses a fixed scale and step.
     *
     * @var bool|null
     */
    protected $fixedScale;

    /**
     * Returns the step used by this context.
     */
    public function getStep(): ?int
    {
        return $this->step;
    }

    /**
     * Returns the step used by this context.
     */
    public function setStep(?int $step): self
    {
        $this->step = $step;

        return $this;
    }

    /**
     * Returns whether this context uses a fixed scale and step.
     */
    public function getFixedScale(): ?bool
    {
        return $this->fixedScale;
    }

    /**
     * Returns whether this context uses a fixed scale and step.
     */
    public function setFixedScale(?bool $fixedScale): self
    {
        $this->fixedScale = $fixedScale;

        return $this;
    }
}
