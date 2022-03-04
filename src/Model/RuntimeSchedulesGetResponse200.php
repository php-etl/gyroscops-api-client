<?php

namespace Gyroscops\Api\Model;

class RuntimeSchedulesGetResponse200
{
    /**
     * 
     *
     * @var ScheduleJsonld[]
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
     * @var RuntimeSchedulesGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimeSchedulesGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return ScheduleJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param ScheduleJsonld[] $hydraMember
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
     * @return RuntimeSchedulesGetResponse200HydraView
     */
    public function getHydraView() : RuntimeSchedulesGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimeSchedulesGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimeSchedulesGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimeSchedulesGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimeSchedulesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimeSchedulesGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimeSchedulesGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}