<?php

namespace Gyroscops\Api\Model;

class AuthenticationOfferIdOptionsGetResponse200
{
    /**
     * @var OptionJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationOfferIdOptionsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var AuthenticationOfferIdOptionsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return OptionJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param OptionJsonld[] $hydraMember
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

    public function getHydraView(): AuthenticationOfferIdOptionsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(AuthenticationOfferIdOptionsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): AuthenticationOfferIdOptionsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(AuthenticationOfferIdOptionsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
