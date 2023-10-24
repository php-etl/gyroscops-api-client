<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class BigNumber extends \ArrayObject
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
     * Checks if this number equals zero.
     *
     * @var bool|null
     */
    protected $zero;
    /**
     * Checks if this number is strictly negative.
     *
     * @var bool|null
     */
    protected $negative;
    /**
     * Checks if this number is negative or zero.
     *
     * @var bool|null
     */
    protected $negativeOrZero;
    /**
     * Checks if this number is strictly positive.
     *
     * @var bool|null
     */
    protected $positive;
    /**
     * Checks if this number is positive or zero.
     *
     * @var bool|null
     */
    protected $positiveOrZero;
    /**
     * Returns the sign of this number.
     *
     * @var int|null
     */
    protected $sign;

    /**
     * Checks if this number equals zero.
     */
    public function getZero(): ?bool
    {
        return $this->zero;
    }

    /**
     * Checks if this number equals zero.
     */
    public function setZero(?bool $zero): self
    {
        $this->initialized['zero'] = true;
        $this->zero = $zero;

        return $this;
    }

    /**
     * Checks if this number is strictly negative.
     */
    public function getNegative(): ?bool
    {
        return $this->negative;
    }

    /**
     * Checks if this number is strictly negative.
     */
    public function setNegative(?bool $negative): self
    {
        $this->initialized['negative'] = true;
        $this->negative = $negative;

        return $this;
    }

    /**
     * Checks if this number is negative or zero.
     */
    public function getNegativeOrZero(): ?bool
    {
        return $this->negativeOrZero;
    }

    /**
     * Checks if this number is negative or zero.
     */
    public function setNegativeOrZero(?bool $negativeOrZero): self
    {
        $this->initialized['negativeOrZero'] = true;
        $this->negativeOrZero = $negativeOrZero;

        return $this;
    }

    /**
     * Checks if this number is strictly positive.
     */
    public function getPositive(): ?bool
    {
        return $this->positive;
    }

    /**
     * Checks if this number is strictly positive.
     */
    public function setPositive(?bool $positive): self
    {
        $this->initialized['positive'] = true;
        $this->positive = $positive;

        return $this;
    }

    /**
     * Checks if this number is positive or zero.
     */
    public function getPositiveOrZero(): ?bool
    {
        return $this->positiveOrZero;
    }

    /**
     * Checks if this number is positive or zero.
     */
    public function setPositiveOrZero(?bool $positiveOrZero): self
    {
        $this->initialized['positiveOrZero'] = true;
        $this->positiveOrZero = $positiveOrZero;

        return $this;
    }

    /**
     * Returns the sign of this number.
     */
    public function getSign(): ?int
    {
        return $this->sign;
    }

    /**
     * Returns the sign of this number.
     */
    public function setSign(?int $sign): self
    {
        $this->initialized['sign'] = true;
        $this->sign = $sign;

        return $this;
    }
}
