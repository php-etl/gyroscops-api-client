<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class MoneyJsonld
{
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
     * @var BigDecimalJsonld|null
     */
    protected $amount;
    /**
     * @var CurrencyJsonld|null
     */
    protected $currency;
    /**
     * @var ContextJsonld|null
     */
    protected $context2;
    /**
     * @var BigDecimalJsonld|null
     */
    protected $minorAmount;
    /**
     * @var BigIntegerJsonld|null
     */
    protected $unscaledAmount;
    /**
     * Required by interface MoneyContainer.
     *
     * @var BigNumberJsonld[]|null
     */
    protected $amounts;
    /**
     * Returns the sign of this money.
     *
     * @var int|null
     */
    protected $sign;
    /**
     * Returns whether this money has zero value.
     *
     * @var bool|null
     */
    protected $zero;
    /**
     * Returns whether this money has a negative value.
     *
     * @var bool|null
     */
    protected $negative;
    /**
     * Returns whether this money has a negative or zero value.
     *
     * @var bool|null
     */
    protected $negativeOrZero;
    /**
     * Returns whether this money has a positive value.
     *
     * @var bool|null
     */
    protected $positive;
    /**
     * Returns whether this money has a positive or zero value.
     *
     * @var bool|null
     */
    protected $positiveOrZero;

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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAmount(): ?BigDecimalJsonld
    {
        return $this->amount;
    }

    public function setAmount(?BigDecimalJsonld $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCurrency(): ?CurrencyJsonld
    {
        return $this->currency;
    }

    public function setCurrency(?CurrencyJsonld $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getContext2(): ?ContextJsonld
    {
        return $this->context2;
    }

    public function setContext2(?ContextJsonld $context2): self
    {
        $this->context2 = $context2;

        return $this;
    }

    public function getMinorAmount(): ?BigDecimalJsonld
    {
        return $this->minorAmount;
    }

    public function setMinorAmount(?BigDecimalJsonld $minorAmount): self
    {
        $this->minorAmount = $minorAmount;

        return $this;
    }

    public function getUnscaledAmount(): ?BigIntegerJsonld
    {
        return $this->unscaledAmount;
    }

    public function setUnscaledAmount(?BigIntegerJsonld $unscaledAmount): self
    {
        $this->unscaledAmount = $unscaledAmount;

        return $this;
    }

    /**
     * Required by interface MoneyContainer.
     *
     * @return BigNumberJsonld[]|null
     */
    public function getAmounts(): ?array
    {
        return $this->amounts;
    }

    /**
     * Required by interface MoneyContainer.
     *
     * @param BigNumberJsonld[]|null $amounts
     */
    public function setAmounts(?array $amounts): self
    {
        $this->amounts = $amounts;

        return $this;
    }

    /**
     * Returns the sign of this money.
     */
    public function getSign(): ?int
    {
        return $this->sign;
    }

    /**
     * Returns the sign of this money.
     */
    public function setSign(?int $sign): self
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * Returns whether this money has zero value.
     */
    public function getZero(): ?bool
    {
        return $this->zero;
    }

    /**
     * Returns whether this money has zero value.
     */
    public function setZero(?bool $zero): self
    {
        $this->zero = $zero;

        return $this;
    }

    /**
     * Returns whether this money has a negative value.
     */
    public function getNegative(): ?bool
    {
        return $this->negative;
    }

    /**
     * Returns whether this money has a negative value.
     */
    public function setNegative(?bool $negative): self
    {
        $this->negative = $negative;

        return $this;
    }

    /**
     * Returns whether this money has a negative or zero value.
     */
    public function getNegativeOrZero(): ?bool
    {
        return $this->negativeOrZero;
    }

    /**
     * Returns whether this money has a negative or zero value.
     */
    public function setNegativeOrZero(?bool $negativeOrZero): self
    {
        $this->negativeOrZero = $negativeOrZero;

        return $this;
    }

    /**
     * Returns whether this money has a positive value.
     */
    public function getPositive(): ?bool
    {
        return $this->positive;
    }

    /**
     * Returns whether this money has a positive value.
     */
    public function setPositive(?bool $positive): self
    {
        $this->positive = $positive;

        return $this;
    }

    /**
     * Returns whether this money has a positive or zero value.
     */
    public function getPositiveOrZero(): ?bool
    {
        return $this->positiveOrZero;
    }

    /**
     * Returns whether this money has a positive or zero value.
     */
    public function setPositiveOrZero(?bool $positiveOrZero): self
    {
        $this->positiveOrZero = $positiveOrZero;

        return $this;
    }
}
