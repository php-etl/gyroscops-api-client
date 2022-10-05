<?php

namespace Gyroscops\Api\Model;

class Subscription
{
    /**
     * @var string
     */
    protected $id;
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
     * @var Price
     */
    protected $cost;
    /**
     * @var string[]
     */
    protected $periods;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

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

    public function getCost(): Price
    {
        return $this->cost;
    }

    public function setCost(Price $cost): self
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