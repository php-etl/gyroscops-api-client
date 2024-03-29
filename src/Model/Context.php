<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class Context extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['step'] = true;
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
        $this->initialized['fixedScale'] = true;
        $this->fixedScale = $fixedScale;

        return $this;
    }
}
