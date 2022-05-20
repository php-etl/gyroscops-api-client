<?php

namespace Gyroscops\Api\Model;

class RuntimeExecutionExecutionWorkflowsGetResponse200
{
    /**
     * 
     *
     * @var ExecutionWorkflowJsonld[]
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
     * @var RuntimeExecutionExecutionWorkflowsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimeExecutionExecutionWorkflowsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return ExecutionWorkflowJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param ExecutionWorkflowJsonld[] $hydraMember
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
     * @return RuntimeExecutionExecutionWorkflowsGetResponse200HydraView
     */
    public function getHydraView() : RuntimeExecutionExecutionWorkflowsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimeExecutionExecutionWorkflowsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimeExecutionExecutionWorkflowsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimeExecutionExecutionWorkflowsGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimeExecutionExecutionWorkflowsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimeExecutionExecutionWorkflowsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimeExecutionExecutionWorkflowsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}