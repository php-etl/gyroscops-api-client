<?php

namespace Gyroscops\Api\Model;

class ReferralRequestsGetResponse200
{
    /**
     * 
     *
     * @var ReferralRequestJsonld[]
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
     * @var ReferralRequestsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var ReferralRequestsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return ReferralRequestJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param ReferralRequestJsonld[] $hydraMember
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
     * @return ReferralRequestsGetResponse200HydraView
     */
    public function getHydraView() : ReferralRequestsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param ReferralRequestsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(ReferralRequestsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return ReferralRequestsGetResponse200HydraSearch
     */
    public function getHydraSearch() : ReferralRequestsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param ReferralRequestsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(ReferralRequestsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}