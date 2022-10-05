<?php

namespace Gyroscops\Api\Model;

class SubscriptionOptionJsonld
{
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
     * @var string|null
     */
    protected $subscription;
    /**
     * @var string|null
     */
    protected $option;
    /**
     * @var PriceJsonld
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

    public function getPrice(): PriceJsonld
    {
        return $this->price;
    }

    public function setPrice(PriceJsonld $price): self
    {
        $this->price = $price;

        return $this;
    }
}
