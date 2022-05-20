<?php

namespace Gyroscops\Api\Model;

class EnvironmentsGetResponse200
{
    /**
     * 
     *
     * @var EnvironmentJsonld[]
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
     * @var EnvironmentsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var EnvironmentsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return EnvironmentJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param EnvironmentJsonld[] $hydraMember
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
     * @return EnvironmentsGetResponse200HydraView
     */
    public function getHydraView() : EnvironmentsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param EnvironmentsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(EnvironmentsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return EnvironmentsGetResponse200HydraSearch
     */
    public function getHydraSearch() : EnvironmentsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param EnvironmentsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(EnvironmentsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}