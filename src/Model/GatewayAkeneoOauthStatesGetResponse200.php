<?php

namespace Gyroscops\Api\Model;

class GatewayAkeneoOauthStatesGetResponse200
{
    /**
     * @var AkeneoOauthTokenJsonldRead[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var GatewayAkeneoOauthStatesGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var GatewayAkeneoOauthStatesGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return AkeneoOauthTokenJsonldRead[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param AkeneoOauthTokenJsonldRead[] $hydraMember
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

    public function getHydraView(): GatewayAkeneoOauthStatesGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(GatewayAkeneoOauthStatesGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): GatewayAkeneoOauthStatesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(GatewayAkeneoOauthStatesGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
