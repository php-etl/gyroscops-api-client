<?php

namespace Gyroscops\Api\Model;

class EnvironmentVariableFromConfigMapsGetResponse200
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
     * @var EnvironmentVariableFromConfigMapsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var EnvironmentVariableFromConfigMapsGetResponse200HydraSearch
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
     * @return EnvironmentVariableFromConfigMapsGetResponse200HydraView
     */
    public function getHydraView() : EnvironmentVariableFromConfigMapsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param EnvironmentVariableFromConfigMapsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(EnvironmentVariableFromConfigMapsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return EnvironmentVariableFromConfigMapsGetResponse200HydraSearch
     */
    public function getHydraSearch() : EnvironmentVariableFromConfigMapsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param EnvironmentVariableFromConfigMapsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(EnvironmentVariableFromConfigMapsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}