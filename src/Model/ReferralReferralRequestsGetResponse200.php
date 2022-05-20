<?php

namespace Gyroscops\Api\Model;

class ReferralReferralRequestsGetResponse200
{
    /**
     * 
     *
     * @var ReferralRequestJsonldReferralRequestRead[]
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
     * @var ReferralReferralRequestsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var ReferralReferralRequestsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return ReferralRequestJsonldReferralRequestRead[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param ReferralRequestJsonldReferralRequestRead[] $hydraMember
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
     * @return ReferralReferralRequestsGetResponse200HydraView
     */
    public function getHydraView() : ReferralReferralRequestsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param ReferralReferralRequestsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(ReferralReferralRequestsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return ReferralReferralRequestsGetResponse200HydraSearch
     */
    public function getHydraSearch() : ReferralReferralRequestsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param ReferralReferralRequestsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(ReferralReferralRequestsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}