<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class GatewayAkeneoOauthTokenPutBody
{
    /**
     * @var AkeneoOauthTokenOauthTokenInputJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var GatewayAkeneoOauthTokenPutBodyHydraView|null
     */
    protected $hydraView;
    /**
     * @var GatewayAkeneoOauthTokenPutBodyHydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return AkeneoOauthTokenOauthTokenInputJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param AkeneoOauthTokenOauthTokenInputJsonld[]|null $hydraMember
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

    public function getHydraView(): ?GatewayAkeneoOauthTokenPutBodyHydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?GatewayAkeneoOauthTokenPutBodyHydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?GatewayAkeneoOauthTokenPutBodyHydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?GatewayAkeneoOauthTokenPutBodyHydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
