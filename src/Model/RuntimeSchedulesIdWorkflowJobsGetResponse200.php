<?php

namespace Gyroscops\Api\Model;

class RuntimeSchedulesIdWorkflowJobsGetResponse200
{
    /**
     * 
     *
     * @var WorkflowJobJsonldRead[]
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
     * @var RuntimeSchedulesIdWorkflowJobsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimeSchedulesIdWorkflowJobsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return WorkflowJobJsonldRead[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param WorkflowJobJsonldRead[] $hydraMember
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
     * @return RuntimeSchedulesIdWorkflowJobsGetResponse200HydraView
     */
    public function getHydraView() : RuntimeSchedulesIdWorkflowJobsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimeSchedulesIdWorkflowJobsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimeSchedulesIdWorkflowJobsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimeSchedulesIdWorkflowJobsGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimeSchedulesIdWorkflowJobsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimeSchedulesIdWorkflowJobsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimeSchedulesIdWorkflowJobsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}