<?php

namespace Gyroscops\Api\Model;

class AuthenticationSubscriptionsIdOptionsGetResponse200
{
    /**
     * @var SubscriptionOptionJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationSubscriptionsIdOptionsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var AuthenticationSubscriptionsIdOptionsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return SubscriptionOptionJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param SubscriptionOptionJsonld[] $hydraMember
     */
    public function setHydraMember(array $hydraMember): self
    {
        $this->hydraMember = $hydraMember;

        return $this;
    }

    public function getHydraTotalItems(): int
    {
        return $this->hydraTotalItems;
    }

    public function setHydraTotalItems(int $hydraTotalItems): self
    {
        $this->hydraTotalItems = $hydraTotalItems;

        return $this;
    }

    public function getHydraView(): AuthenticationSubscriptionsIdOptionsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(AuthenticationSubscriptionsIdOptionsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): AuthenticationSubscriptionsIdOptionsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(AuthenticationSubscriptionsIdOptionsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
