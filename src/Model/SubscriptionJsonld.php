<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class SubscriptionJsonld
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
     * @var string|null
     */
    protected $id2;
    /**
     * @var string|null
     */
    protected $organization;
    /**
     * @var string|null
     */
    protected $offer;
    /**
     * @var string[]|null
     */
    protected $options;
    /**
     * @var PriceJsonld|null
     */
    protected $cost;
    /**
     * @var string[]|null
     */
    protected $periods;

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

    public function getId2(): ?string
    {
        return $this->id2;
    }

    public function setId2(?string $id2): self
    {
        $this->id2 = $id2;

        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;

        return $this;
    }

    public function getOffer(): ?string
    {
        return $this->offer;
    }

    public function setOffer(?string $offer): self
    {
        $this->offer = $offer;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * @param string[]|null $options
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getCost(): ?PriceJsonld
    {
        return $this->cost;
    }

    public function setCost(?PriceJsonld $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPeriods(): ?iterable
    {
        return $this->periods;
    }

    /**
     * @param string[]|null $periods
     */
    public function setPeriods(?iterable $periods): self
    {
        $this->periods = $periods;

        return $this;
    }
}
