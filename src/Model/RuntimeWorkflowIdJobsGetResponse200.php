<?php

namespace Gyroscops\Api\Model;

class RuntimeWorkflowIdJobsGetResponse200
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
     * @var RuntimeWorkflowIdJobsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimeWorkflowIdJobsGetResponse200HydraSearch
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
     * @return RuntimeWorkflowIdJobsGetResponse200HydraView
     */
    public function getHydraView() : RuntimeWorkflowIdJobsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimeWorkflowIdJobsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimeWorkflowIdJobsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimeWorkflowIdJobsGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimeWorkflowIdJobsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimeWorkflowIdJobsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimeWorkflowIdJobsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}