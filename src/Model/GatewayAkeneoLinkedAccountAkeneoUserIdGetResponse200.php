<?php

namespace Gyroscops\Api\Model;

class GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200
{
    /**
     * @var AkeneoLinkedAccountJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return AkeneoLinkedAccountJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param AkeneoLinkedAccountJsonld[]|null $hydraMember
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

    public function getHydraView(): ?GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?GatewayAkeneoLinkedAccountAkeneoUserIdGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
