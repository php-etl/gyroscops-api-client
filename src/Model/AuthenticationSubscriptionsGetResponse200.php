<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AuthenticationSubscriptionsGetResponse200
{
    /**
     * @var SubscriptionJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationSubscriptionsGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var AuthenticationSubscriptionsGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return SubscriptionJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param SubscriptionJsonld[]|null $hydraMember
     */
    public function setHydraMember(?array $hydraMember): self
    {
        $this->hydraMember = $hydraMember;

        return $this;
    }

    public function getHydraTotalItems(): ?int
    {
        return $this->hydraTotalItems;
    }

    public function setHydraTotalItems(?int $hydraTotalItems): self
    {
        $this->hydraTotalItems = $hydraTotalItems;

        return $this;
    }

    public function getHydraView(): ?AuthenticationSubscriptionsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?AuthenticationSubscriptionsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?AuthenticationSubscriptionsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?AuthenticationSubscriptionsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
