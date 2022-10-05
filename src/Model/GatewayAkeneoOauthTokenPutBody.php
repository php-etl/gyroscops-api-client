<?php

namespace Gyroscops\Api\Model;

class GatewayAkeneoOauthTokenPutBody
{
    /**
     * @var AkeneoOauthTokenOauthTokenInputJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var GatewayAkeneoOauthTokenPutBodyHydraView
     */
    protected $hydraView;
    /**
     * @var GatewayAkeneoOauthTokenPutBodyHydraSearch
     */
    protected $hydraSearch;

    /**
     * @return AkeneoOauthTokenOauthTokenInputJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param AkeneoOauthTokenOauthTokenInputJsonld[] $hydraMember
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

    public function getHydraView(): GatewayAkeneoOauthTokenPutBodyHydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(GatewayAkeneoOauthTokenPutBodyHydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): GatewayAkeneoOauthTokenPutBodyHydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(GatewayAkeneoOauthTokenPutBodyHydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
