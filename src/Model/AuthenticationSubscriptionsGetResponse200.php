<?php

namespace Gyroscops\Api\Model;

class AuthenticationSubscriptionsGetResponse200
{
    /**
     * @var SubscriptionJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationSubscriptionsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var AuthenticationSubscriptionsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return SubscriptionJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param SubscriptionJsonld[] $hydraMember
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

    public function getHydraView(): AuthenticationSubscriptionsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(AuthenticationSubscriptionsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): AuthenticationSubscriptionsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(AuthenticationSubscriptionsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
