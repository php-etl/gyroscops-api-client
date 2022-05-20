<?php

namespace Gyroscops\Api\Model;

class RuntimeExecutionExecutionPipelinesGetResponse200
{
    /**
     * 
     *
     * @var ExecutionPipelineJsonld[]
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
     * @var RuntimeExecutionExecutionPipelinesGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimeExecutionExecutionPipelinesGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return ExecutionPipelineJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param ExecutionPipelineJsonld[] $hydraMember
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
     * @return RuntimeExecutionExecutionPipelinesGetResponse200HydraView
     */
    public function getHydraView() : RuntimeExecutionExecutionPipelinesGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimeExecutionExecutionPipelinesGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimeExecutionExecutionPipelinesGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimeExecutionExecutionPipelinesGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimeExecutionExecutionPipelinesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimeExecutionExecutionPipelinesGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimeExecutionExecutionPipelinesGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}