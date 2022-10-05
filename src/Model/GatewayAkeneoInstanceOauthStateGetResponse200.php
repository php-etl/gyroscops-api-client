<?php

namespace Gyroscops\Api\Model;

class GatewayAkeneoInstanceOauthStateGetResponse200
{
    /**
     * @var AkeneoInstanceJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var GatewayAkeneoInstanceOauthStateGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var GatewayAkeneoInstanceOauthStateGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return AkeneoInstanceJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param AkeneoInstanceJsonld[] $hydraMember
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

    public function getHydraView(): GatewayAkeneoInstanceOauthStateGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(GatewayAkeneoInstanceOauthStateGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): GatewayAkeneoInstanceOauthStateGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(GatewayAkeneoInstanceOauthStateGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
