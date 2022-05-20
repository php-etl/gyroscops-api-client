<?php

namespace Gyroscops\Api\Model;

class RuntimePipelinesIdCompilationsGetResponse200
{
    /**
     * 
     *
     * @var PipelineCompilationJsonld[]
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
     * @var RuntimePipelinesIdCompilationsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimePipelinesIdCompilationsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return PipelineCompilationJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param PipelineCompilationJsonld[] $hydraMember
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
     * @return RuntimePipelinesIdCompilationsGetResponse200HydraView
     */
    public function getHydraView() : RuntimePipelinesIdCompilationsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimePipelinesIdCompilationsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimePipelinesIdCompilationsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimePipelinesIdCompilationsGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimePipelinesIdCompilationsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimePipelinesIdCompilationsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimePipelinesIdCompilationsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}