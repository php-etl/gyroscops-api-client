<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class BigDecimal
{
    /**
     * The scale (number of digits after the decimal point) of this decimal number.
     *
     * @var int|null
     */
    protected $scale;
    /**
     * @var int|null
     */
    protected $sign;
    /**
     * @var BigInteger|null
     */
    protected $unscaledValue;
    /**
     * Returns a string representing the integral part of this decimal number.
     *
     * @var string|null
     */
    protected $integralPart;
    /**
     * Returns a string representing the fractional part of this decimal number.
     *
     * @var string|null
     */
    protected $fractionalPart;
    /**
     * Returns whether this decimal number has a non-zero fractional part.
     *
     * @var bool|null
     */
    protected $nonZeroFractionalPart;
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
     * The scale (number of digits after the decimal point) of this decimal number.
     */
    public function getScale(): ?int
    {
        return $this->scale;
    }

    /**
     * The scale (number of digits after the decimal point) of this decimal number.
     */
    public function setScale(?int $scale): self
    {
        $this->scale = $scale;

        return $this;
    }

    public function getSign(): ?int
    {
        return $this->sign;
    }

    public function setSign(?int $sign): self
    {
        $this->sign = $sign;

        return $this;
    }

    public function getUnscaledValue(): ?BigInteger
    {
        return $this->unscaledValue;
    }

    public function setUnscaledValue(?BigInteger $unscaledValue): self
    {
        $this->unscaledValue = $unscaledValue;

        return $this;
    }

    /**
     * Returns a string representing the integral part of this decimal number.
     */
    public function getIntegralPart(): ?string
    {
        return $this->integralPart;
    }

    /**
     * Returns a string representing the integral part of this decimal number.
     */
    public function setIntegralPart(?string $integralPart): self
    {
        $this->integralPart = $integralPart;

        return $this;
    }

    /**
     * Returns a string representing the fractional part of this decimal number.
     */
    public function getFractionalPart(): ?string
    {
        return $this->fractionalPart;
    }

    /**
     * Returns a string representing the fractional part of this decimal number.
     */
    public function setFractionalPart(?string $fractionalPart): self
    {
        $this->fractionalPart = $fractionalPart;

        return $this;
    }

    /**
     * Returns whether this decimal number has a non-zero fractional part.
     */
    public function getNonZeroFractionalPart(): ?bool
    {
        return $this->nonZeroFractionalPart;
    }

    /**
     * Returns whether this decimal number has a non-zero fractional part.
     */
    public function setNonZeroFractionalPart(?bool $nonZeroFractionalPart): self
    {
        $this->nonZeroFractionalPart = $nonZeroFractionalPart;

        return $this;
    }

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
        $this->positiveOrZero = $positiveOrZero;

        return $this;
    }
}
