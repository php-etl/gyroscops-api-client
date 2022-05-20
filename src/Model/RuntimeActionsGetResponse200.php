<?php

namespace Gyroscops\Api\Model;

class RuntimeActionsGetResponse200
{
    /**
     * 
     *
     * @var ActionJsonldRead[]
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
     * @var RuntimeActionsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimeActionsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return ActionJsonldRead[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param ActionJsonldRead[] $hydraMember
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
     * @return RuntimeActionsGetResponse200HydraView
     */
    public function getHydraView() : RuntimeActionsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimeActionsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimeActionsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimeActionsGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimeActionsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimeActionsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimeActionsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}