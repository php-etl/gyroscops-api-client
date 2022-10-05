<?php

namespace Gyroscops\Api\Model;

class GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200
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
     * @var GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200HydraSearch
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

    public function getHydraView(): GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
