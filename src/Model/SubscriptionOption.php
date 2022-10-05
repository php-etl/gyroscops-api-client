<?php

namespace Gyroscops\Api\Model;

class SubscriptionOption
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $subscription;
    /**
     * @var string|null
     */
    protected $option;
    /**
     * @var Price
     */
    protected $price;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getSubscription(): ?string
    {
        return $this->subscription;
    }

    public function setSubscription(?string $subscription): self
    {
        $this->subscription = $subscription;

        return $this;
    }

    public function getOption(): ?string
    {
        return $this->option;
    }

    public function setOption(?string $option): self
    {
        $this->option = $option;

        return $this;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function setPrice(Price $price): self
    {
        $this->price = $price;

        return $this;
    }
}
