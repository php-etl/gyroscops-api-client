<?php

namespace Gyroscops\Api\Model;

class RuntimePipelinesGetResponse200
{
    /**
     * 
     *
     * @var PipelineJsonldRead[]
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
     * @var RuntimePipelinesGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimePipelinesGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return PipelineJsonldRead[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param PipelineJsonldRead[] $hydraMember
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
     * @return RuntimePipelinesGetResponse200HydraView
     */
    public function getHydraView() : RuntimePipelinesGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimePipelinesGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimePipelinesGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimePipelinesGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimePipelinesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimePipelinesGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimePipelinesGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}