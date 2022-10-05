<?php

namespace Gyroscops\Api\Model;

class GatewayAkeneoOauthTokenPutResponse200
{
    /**
     * @var AkeneoOauthTokenOauthTokenOutputJsonldRead[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var GatewayAkeneoOauthTokenPutResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var GatewayAkeneoOauthTokenPutResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return AkeneoOauthTokenOauthTokenOutputJsonldRead[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param AkeneoOauthTokenOauthTokenOutputJsonldRead[] $hydraMember
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

    public function getHydraView(): GatewayAkeneoOauthTokenPutResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(GatewayAkeneoOauthTokenPutResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): GatewayAkeneoOauthTokenPutResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(GatewayAkeneoOauthTokenPutResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
