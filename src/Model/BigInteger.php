<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class BigInteger
{
    /**
     * Returns the number of bits in the minimal two's-complement representation of this BigInteger, excluding a sign bit.
     *
     * @var int|null
     */
    protected $bitLength;
    /**
     * Returns the index of the rightmost (lowest-order) one bit in this BigInteger.
     *
     * @var int|null
     */
    protected $lowestSetBit;
    /**
     * Returns whether this number is even.
     *
     * @var bool|null
     */
    protected $even;
    /**
     * Returns whether this number is odd.
     *
     * @var bool|null
     */
    protected $odd;
    /**
     * @var int|null
     */
    protected $sign;
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
     * Returns the number of bits in the minimal two's-complement representation of this BigInteger, excluding a sign bit.
     */
    public function getBitLength(): ?int
    {
        return $this->bitLength;
    }

    /**
     * Returns the number of bits in the minimal two's-complement representation of this BigInteger, excluding a sign bit.
     */
    public function setBitLength(?int $bitLength): self
    {
        $this->bitLength = $bitLength;

        return $this;
    }

    /**
     * Returns the index of the rightmost (lowest-order) one bit in this BigInteger.
     */
    public function getLowestSetBit(): ?int
    {
        return $this->lowestSetBit;
    }

    /**
     * Returns the index of the rightmost (lowest-order) one bit in this BigInteger.
     */
    public function setLowestSetBit(?int $lowestSetBit): self
    {
        $this->lowestSetBit = $lowestSetBit;

        return $this;
    }

    /**
     * Returns whether this number is even.
     */
    public function getEven(): ?bool
    {
        return $this->even;
    }

    /**
     * Returns whether this number is even.
     */
    public function setEven(?bool $even): self
    {
        $this->even = $even;

        return $this;
    }

    /**
     * Returns whether this number is odd.
     */
    public function getOdd(): ?bool
    {
        return $this->odd;
    }

    /**
     * Returns whether this number is odd.
     */
    public function setOdd(?bool $odd): self
    {
        $this->odd = $odd;

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
