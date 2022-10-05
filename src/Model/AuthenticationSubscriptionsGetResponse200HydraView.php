<?php

namespace Gyroscops\Api\Model;

class AuthenticationSubscriptionsGetResponse200HydraView
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
    protected $hydraFirst;
    /**
     * @var string
     */
    protected $hydraLast;
    /**
     * @var string
     */
    protected $hydraPrevious;
    /**
     * @var string
     */
    protected $hydraNext;

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

    public function getHydraFirst(): string
    {
        return $this->hydraFirst;
    }

    public function setHydraFirst(string $hydraFirst): self
    {
        $this->hydraFirst = $hydraFirst;

        return $this;
    }

    public function getHydraLast(): string
    {
        return $this->hydraLast;
    }

    public function setHydraLast(string $hydraLast): self
    {
        $this->hydraLast = $hydraLast;

        return $this;
    }

    public function getHydraPrevious(): string
    {
        return $this->hydraPrevious;
    }

    public function setHydraPrevious(string $hydraPrevious): self
    {
        $this->hydraPrevious = $hydraPrevious;

        return $this;
    }

    public function getHydraNext(): string
    {
        return $this->hydraNext;
    }

    public function setHydraNext(string $hydraNext): self
    {
        $this->hydraNext = $hydraNext;

        return $this;
    }
}