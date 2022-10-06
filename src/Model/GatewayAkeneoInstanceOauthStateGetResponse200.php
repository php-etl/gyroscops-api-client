<?php

namespace Gyroscops\Api\Model;

class GatewayAkeneoInstanceOauthStateGetResponse200
{
    /**
     * @var AkeneoInstanceJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var GatewayAkeneoInstanceOauthStateGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var GatewayAkeneoInstanceOauthStateGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return AkeneoInstanceJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param AkeneoInstanceJsonld[]|null $hydraMember
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

    public function getHydraView(): ?GatewayAkeneoInstanceOauthStateGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?GatewayAkeneoInstanceOauthStateGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?GatewayAkeneoInstanceOauthStateGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?GatewayAkeneoInstanceOauthStateGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
