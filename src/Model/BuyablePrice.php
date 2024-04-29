<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class BuyablePrice extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var Buyable|null
     */
    protected $buyable;
    /**
     * @var SubscriptionType|null
     */
    protected $type;
    /**
     * @var Price|null
     */
    protected $amount;

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

    public function getBuyable(): ?Buyable
    {
        return $this->buyable;
    }

    public function setBuyable(?Buyable $buyable): self
    {
        $this->initialized['buyable'] = true;
        $this->buyable = $buyable;

        return $this;
    }

    public function getType(): ?SubscriptionType
    {
        return $this->type;
    }

    public function setType(?SubscriptionType $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getAmount(): ?Price
    {
        return $this->amount;
    }

    public function setAmount(?Price $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }
}
