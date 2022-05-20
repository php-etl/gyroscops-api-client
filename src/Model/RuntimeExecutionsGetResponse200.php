<?php

namespace Gyroscops\Api\Model;

class RuntimeExecutionsGetResponse200
{
    /**
     * 
     *
     * @var ExecutionJsonldRead[]
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
     * @var RuntimeExecutionsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimeExecutionsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return ExecutionJsonldRead[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param ExecutionJsonldRead[] $hydraMember
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
     * @return RuntimeExecutionsGetResponse200HydraView
     */
    public function getHydraView() : RuntimeExecutionsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimeExecutionsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimeExecutionsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimeExecutionsGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimeExecutionsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimeExecutionsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimeExecutionsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}