<?php

namespace Gyroscops\Api\Model;

class Currency
{
    /**
     * The currency code.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * The numeric currency code.
     *
     * @var int
     */
    protected $numericCode;
    /**
     * The name of the currency.
     *
     * @var string
     */
    protected $name;
    /**
     * The default number of fraction digits (typical scale) used with this currency.
     *
     * @var int
     */
    protected $defaultFractionDigits;

    /**
     * The currency code.
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * The currency code.
     */
    public function setCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * The numeric currency code.
     */
    public function getNumericCode(): int
    {
        return $this->numericCode;
    }

    /**
     * The numeric currency code.
     */
    public function setNumericCode(int $numericCode): self
    {
        $this->numericCode = $numericCode;

        return $this;
    }

    /**
     * The name of the currency.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the currency.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The default number of fraction digits (typical scale) used with this currency.
     */
    public function getDefaultFractionDigits(): int
    {
        return $this->defaultFractionDigits;
    }

    /**
     * The default number of fraction digits (typical scale) used with this currency.
     */
    public function setDefaultFractionDigits(int $defaultFractionDigits): self
    {
        $this->defaultFractionDigits = $defaultFractionDigits;

        return $this;
    }
}