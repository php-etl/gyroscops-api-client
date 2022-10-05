<?php

namespace Gyroscops\Api\Model;

class RuntimeScheduleIdWorkflowJobsGetResponse200
{
    /**
     * @var WorkflowJobJsonldRead[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimeScheduleIdWorkflowJobsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimeScheduleIdWorkflowJobsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return WorkflowJobJsonldRead[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param WorkflowJobJsonldRead[] $hydraMember
     */
    public function setHydraMember(array $hydraMember): self
    {
        $this->hydraMember = $hydraMember;

        return $this;
    }

    public function getHydraTotalItems(): int
    {
        return $this->hydraTotalItems;
    }

    public function setHydraTotalItems(int $hydraTotalItems): self
    {
        $this->hydraTotalItems = $hydraTotalItems;

        return $this;
    }

    public function getHydraView(): RuntimeScheduleIdWorkflowJobsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimeScheduleIdWorkflowJobsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimeScheduleIdWorkflowJobsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimeScheduleIdWorkflowJobsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
