<?php

namespace Gyroscops\Api\Model;

class GatewayAkeneoLinkedAccountsGetResponse200
{
    /**
     * @var AkeneoLinkedAccountJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var GatewayAkeneoLinkedAccountsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var GatewayAkeneoLinkedAccountsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return AkeneoLinkedAccountJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param AkeneoLinkedAccountJsonld[] $hydraMember
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

    public function getHydraView(): GatewayAkeneoLinkedAccountsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(GatewayAkeneoLinkedAccountsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): GatewayAkeneoLinkedAccountsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(GatewayAkeneoLinkedAccountsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
