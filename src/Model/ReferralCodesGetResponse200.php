<?php

namespace Gyroscops\Api\Model;

class ReferralCodesGetResponse200
{
    /**
     * 
     *
     * @var ReferralCodeJsonldReferralCodeRead[]
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
     * @var ReferralCodesGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var ReferralCodesGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return ReferralCodeJsonldReferralCodeRead[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param ReferralCodeJsonldReferralCodeRead[] $hydraMember
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
     * @return ReferralCodesGetResponse200HydraView
     */
    public function getHydraView() : ReferralCodesGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param ReferralCodesGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(ReferralCodesGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return ReferralCodesGetResponse200HydraSearch
     */
    public function getHydraSearch() : ReferralCodesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param ReferralCodesGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(ReferralCodesGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}