<?php

namespace Gyroscops\Api\Model;

class EnvironmentEnvironmentsGetResponse200
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
     * @var EnvironmentEnvironmentsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var EnvironmentEnvironmentsGetResponse200HydraSearch
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
     * @return EnvironmentEnvironmentsGetResponse200HydraView
     */
    public function getHydraView() : EnvironmentEnvironmentsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param EnvironmentEnvironmentsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(EnvironmentEnvironmentsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return EnvironmentEnvironmentsGetResponse200HydraSearch
     */
    public function getHydraSearch() : EnvironmentEnvironmentsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param EnvironmentEnvironmentsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(EnvironmentEnvironmentsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}