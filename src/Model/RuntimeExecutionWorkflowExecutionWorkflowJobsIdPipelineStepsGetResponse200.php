<?php

namespace Gyroscops\Api\Model;

class RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200
{
    /**
     * 
     *
     * @var ExecutionPipelineStepJsonld[]
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
     * @var RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return ExecutionPipelineStepJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param ExecutionPipelineStepJsonld[] $hydraMember
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
     * @return RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraView
     */
    public function getHydraView() : RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}