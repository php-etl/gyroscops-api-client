<?php

namespace Gyroscops\Api\Model;

class VariableFromConfigMapsGetResponse200
{
    /**
     * 
     *
     * @var VariableFromConfigMapJsonld[]
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
     * @var VariableFromConfigMapsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var VariableFromConfigMapsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return VariableFromConfigMapJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param VariableFromConfigMapJsonld[] $hydraMember
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
     * @return VariableFromConfigMapsGetResponse200HydraView
     */
    public function getHydraView() : VariableFromConfigMapsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param VariableFromConfigMapsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(VariableFromConfigMapsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return VariableFromConfigMapsGetResponse200HydraSearch
     */
    public function getHydraSearch() : VariableFromConfigMapsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param VariableFromConfigMapsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(VariableFromConfigMapsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}