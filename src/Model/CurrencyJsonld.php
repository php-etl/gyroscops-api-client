<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class CurrencyJsonld extends \ArrayObject
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
     * The currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The numeric currency code.
     *
     * @var int|null
     */
    protected $numericCode;
    /**
     * The name of the currency.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The default number of fraction digits (typical scale) used with this currency.
     *
     * @var int|null
     */
    protected $defaultFractionDigits;

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
        $this->initialized['context'] = true;
        $this->context = $context;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The currency code.
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * The currency code.
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * The numeric currency code.
     */
    public function getNumericCode(): ?int
    {
        return $this->numericCode;
    }

    /**
     * The numeric currency code.
     */
    public function setNumericCode(?int $numericCode): self
    {
        $this->initialized['numericCode'] = true;
        $this->numericCode = $numericCode;

        return $this;
    }

    /**
     * The name of the currency.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the currency.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The default number of fraction digits (typical scale) used with this currency.
     */
    public function getDefaultFractionDigits(): ?int
    {
        return $this->defaultFractionDigits;
    }

    /**
     * The default number of fraction digits (typical scale) used with this currency.
     */
    public function setDefaultFractionDigits(?int $defaultFractionDigits): self
    {
        $this->initialized['defaultFractionDigits'] = true;
        $this->defaultFractionDigits = $defaultFractionDigits;

        return $this;
    }
}
