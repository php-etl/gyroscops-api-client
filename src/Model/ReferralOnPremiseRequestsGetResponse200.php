<?php

namespace Gyroscops\Api\Model;

class ReferralOnPremiseRequestsGetResponse200
{
    /**
     * 
     *
     * @var OnPremiseRequestJsonldOnPremiseRequestRead[]
     */
    protected $hydraMember;
    /**
     * 
     *
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * 
     *
     * @var ReferralOnPremiseRequestsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var ReferralOnPremiseRequestsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return OnPremiseRequestJsonldOnPremiseRequestRead[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param OnPremiseRequestJsonldOnPremiseRequestRead[] $hydraMember
     *
     * @return self
     */
    public function setHydraMember(array $hydraMember) : self
    {
        $this->hydraMember = $hydraMember;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHydraTotalItems() : int
    {
        return $this->hydraTotalItems;
    }
    /**
     * 
     *
     * @param int $hydraTotalItems
     *
     * @return self
     */
    public function setHydraTotalItems(int $hydraTotalItems) : self
    {
        $this->hydraTotalItems = $hydraTotalItems;
        return $this;
    }
    /**
     * 
     *
     * @return ReferralOnPremiseRequestsGetResponse200HydraView
     */
    public function getHydraView() : ReferralOnPremiseRequestsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param ReferralOnPremiseRequestsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(ReferralOnPremiseRequestsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return ReferralOnPremiseRequestsGetResponse200HydraSearch
     */
    public function getHydraSearch() : ReferralOnPremiseRequestsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param ReferralOnPremiseRequestsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(ReferralOnPremiseRequestsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}