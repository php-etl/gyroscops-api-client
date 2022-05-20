<?php

namespace Gyroscops\Api\Model;

class RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200
{
    /**
     * 
     *
     * @var ExecutionWorkflowJobJsonld[]
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
     * @var RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return ExecutionWorkflowJobJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param ExecutionWorkflowJobJsonld[] $hydraMember
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
     * @return RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraView
     */
    public function getHydraView() : RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}