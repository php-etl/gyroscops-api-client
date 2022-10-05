<?php

namespace Gyroscops\Api\Model;

class ReferralOnPremiseRequestsGetResponse200
{
    /**
     * @var OnPremiseRequestJsonldOnPremiseRequestRead[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var ReferralOnPremiseRequestsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var ReferralOnPremiseRequestsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return OnPremiseRequestJsonldOnPremiseRequestRead[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param OnPremiseRequestJsonldOnPremiseRequestRead[] $hydraMember
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

    public function getHydraView(): ReferralOnPremiseRequestsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(ReferralOnPremiseRequestsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ReferralOnPremiseRequestsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(ReferralOnPremiseRequestsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
