<?php

namespace Gyroscops\Api\Model;

class ConfigMapsGetResponse200
{
    /**
     * 
     *
     * @var ConfigMapJsonld[]
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
     * @var ConfigMapsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var ConfigMapsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return ConfigMapJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param ConfigMapJsonld[] $hydraMember
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
     * @return ConfigMapsGetResponse200HydraView
     */
    public function getHydraView() : ConfigMapsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param ConfigMapsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(ConfigMapsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return ConfigMapsGetResponse200HydraSearch
     */
    public function getHydraSearch() : ConfigMapsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param ConfigMapsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(ConfigMapsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}