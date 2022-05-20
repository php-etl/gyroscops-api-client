<?php

namespace Gyroscops\Api\Model;

class RuntimePipelineCompilationsGetResponse200
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
     * @var RuntimePipelineCompilationsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimePipelineCompilationsGetResponse200HydraSearch
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
     * @return RuntimePipelineCompilationsGetResponse200HydraView
     */
    public function getHydraView() : RuntimePipelineCompilationsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimePipelineCompilationsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimePipelineCompilationsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimePipelineCompilationsGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimePipelineCompilationsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimePipelineCompilationsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimePipelineCompilationsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}