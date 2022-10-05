<?php

namespace Gyroscops\Api\Model;

class SubscriptionJsonld
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
     * @var string
     */
    protected $id2;
    /**
     * @var string
     */
    protected $organization;
    /**
     * @var string|null
     */
    protected $offer;
    /**
     * @var string[]
     */
    protected $options;
    /**
     * @var PriceJsonld
     */
    protected $cost;
    /**
     * @var string[]
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

    public function getId2(): string
    {
        return $this->id2;
    }

    public function setId2(string $id2): self
    {
        $this->id2 = $id2;

        return $this;
    }

    public function getOrganization(): string
    {
        return $this->organization;
    }

    public function setOrganization(string $organization): self
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
     * @return string[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param string[] $options
     */
    public function setOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getCost(): PriceJsonld
    {
        return $this->cost;
    }

    public function setCost(PriceJsonld $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getPeriods(): iterable
    {
        return $this->periods;
    }

    /**
     * @param string[] $periods
     */
    public function setPeriods(iterable $periods): self
    {
        $this->periods = $periods;

        return $this;
    }
}
