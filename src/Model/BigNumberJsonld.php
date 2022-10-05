<?php

namespace Gyroscops\Api\Model;

class BigNumberJsonld
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
     * Checks if this number equals zero.
     *
     * @var bool
     */
    protected $zero;
    /**
     * Checks if this number is strictly negative.
     *
     * @var bool
     */
    protected $negative;
    /**
     * Checks if this number is negative or zero.
     *
     * @var bool
     */
    protected $negativeOrZero;
    /**
     * Checks if this number is strictly positive.
     *
     * @var bool
     */
    protected $positive;
    /**
     * Checks if this number is positive or zero.
     *
     * @var bool
     */
    protected $positiveOrZero;
    /**
     * Returns the sign of this number.
     *
     * @var int
     */
    protected $sign;

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
     * Checks if this number equals zero.
     */
    public function getZero(): bool
    {
        return $this->zero;
    }

    /**
     * Checks if this number equals zero.
     */
    public function setZero(bool $zero): self
    {
        $this->zero = $zero;

        return $this;
    }

    /**
     * Checks if this number is strictly negative.
     */
    public function getNegative(): bool
    {
        return $this->negative;
    }

    /**
     * Checks if this number is strictly negative.
     */
    public function setNegative(bool $negative): self
    {
        $this->negative = $negative;

        return $this;
    }

    /**
     * Checks if this number is negative or zero.
     */
    public function getNegativeOrZero(): bool
    {
        return $this->negativeOrZero;
    }

    /**
     * Checks if this number is negative or zero.
     */
    public function setNegativeOrZero(bool $negativeOrZero): self
    {
        $this->negativeOrZero = $negativeOrZero;

        return $this;
    }

    /**
     * Checks if this number is strictly positive.
     */
    public function getPositive(): bool
    {
        return $this->positive;
    }

    /**
     * Checks if this number is strictly positive.
     */
    public function setPositive(bool $positive): self
    {
        $this->positive = $positive;

        return $this;
    }

    /**
     * Checks if this number is positive or zero.
     */
    public function getPositiveOrZero(): bool
    {
        return $this->positiveOrZero;
    }

    /**
     * Checks if this number is positive or zero.
     */
    public function setPositiveOrZero(bool $positiveOrZero): self
    {
        $this->positiveOrZero = $positiveOrZero;

        return $this;
    }

    /**
     * Returns the sign of this number.
     */
    public function getSign(): int
    {
        return $this->sign;
    }

    /**
     * Returns the sign of this number.
     */
    public function setSign(int $sign): self
    {
        $this->sign = $sign;

        return $this;
    }
}
