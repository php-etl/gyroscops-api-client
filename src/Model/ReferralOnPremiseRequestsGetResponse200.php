<?php

namespace Gyroscops\Api\Model;

class ReferralOnPremiseRequestsGetResponse200
{
    /**
     * @var OnPremiseRequestJsonldOnPremiseRequestRead[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var ReferralOnPremiseRequestsGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var ReferralOnPremiseRequestsGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return OnPremiseRequestJsonldOnPremiseRequestRead[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param OnPremiseRequestJsonldOnPremiseRequestRead[]|null $hydraMember
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

    public function getHydraView(): ?ReferralOnPremiseRequestsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?ReferralOnPremiseRequestsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?ReferralOnPremiseRequestsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?ReferralOnPremiseRequestsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
