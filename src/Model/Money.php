<?php

namespace Gyroscops\Api\Model;

class Money
{
    /**
     * @var BigDecimal
     */
    protected $amount;
    /**
     * @var Currency
     */
    protected $currency;
    /**
     * @var Context
     */
    protected $context;
    /**
     * @var BigDecimal
     */
    protected $minorAmount;
    /**
     * @var BigInteger
     */
    protected $unscaledAmount;
    /**
     * Required by interface MoneyContainer.
     *
     * @var BigNumber[]
     */
    protected $amounts;
    /**
     * Returns the sign of this money.
     *
     * @var int
     */
    protected $sign;
    /**
     * Returns whether this money has zero value.
     *
     * @var bool
     */
    protected $zero;
    /**
     * Returns whether this money has a negative value.
     *
     * @var bool
     */
    protected $negative;
    /**
     * Returns whether this money has a negative or zero value.
     *
     * @var bool
     */
    protected $negativeOrZero;
    /**
     * Returns whether this money has a positive value.
     *
     * @var bool
     */
    protected $positive;
    /**
     * Returns whether this money has a positive or zero value.
     *
     * @var bool
     */
    protected $positiveOrZero;

    public function getAmount(): BigDecimal
    {
        return $this->amount;
    }

    public function setAmount(BigDecimal $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function setCurrency(Currency $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getContext(): Context
    {
        return $this->context;
    }

    public function setContext(Context $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getMinorAmount(): BigDecimal
    {
        return $this->minorAmount;
    }

    public function setMinorAmount(BigDecimal $minorAmount): self
    {
        $this->minorAmount = $minorAmount;

        return $this;
    }

    public function getUnscaledAmount(): BigInteger
    {
        return $this->unscaledAmount;
    }

    public function setUnscaledAmount(BigInteger $unscaledAmount): self
    {
        $this->unscaledAmount = $unscaledAmount;

        return $this;
    }

    /**
     * Required by interface MoneyContainer.
     *
     * @return BigNumber[]
     */
    public function getAmounts(): array
    {
        return $this->amounts;
    }

    /**
     * Required by interface MoneyContainer.
     *
     * @param BigNumber[] $amounts
     */
    public function setAmounts(array $amounts): self
    {
        $this->amounts = $amounts;

        return $this;
    }

    /**
     * Returns the sign of this money.
     */
    public function getSign(): int
    {
        return $this->sign;
    }

    /**
     * Returns the sign of this money.
     */
    public function setSign(int $sign): self
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * Returns whether this money has zero value.
     */
    public function getZero(): bool
    {
        return $this->zero;
    }

    /**
     * Returns whether this money has zero value.
     */
    public function setZero(bool $zero): self
    {
        $this->zero = $zero;

        return $this;
    }

    /**
     * Returns whether this money has a negative value.
     */
    public function getNegative(): bool
    {
        return $this->negative;
    }

    /**
     * Returns whether this money has a negative value.
     */
    public function setNegative(bool $negative): self
    {
        $this->negative = $negative;

        return $this;
    }

    /**
     * Returns whether this money has a negative or zero value.
     */
    public function getNegativeOrZero(): bool
    {
        return $this->negativeOrZero;
    }

    /**
     * Returns whether this money has a negative or zero value.
     */
    public function setNegativeOrZero(bool $negativeOrZero): self
    {
        $this->negativeOrZero = $negativeOrZero;

        return $this;
    }

    /**
     * Returns whether this money has a positive value.
     */
    public function getPositive(): bool
    {
        return $this->positive;
    }

    /**
     * Returns whether this money has a positive value.
     */
    public function setPositive(bool $positive): self
    {
        $this->positive = $positive;

        return $this;
    }

    /**
     * Returns whether this money has a positive or zero value.
     */
    public function getPositiveOrZero(): bool
    {
        return $this->positiveOrZero;
    }

    /**
     * Returns whether this money has a positive or zero value.
     */
    public function setPositiveOrZero(bool $positiveOrZero): self
    {
        $this->positiveOrZero = $positiveOrZero;

        return $this;
    }
}
