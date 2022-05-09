<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimeSchedulesIdWorkflowJobsGetResponse200
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
     * @var RuntimeSchedulesIdWorkflowJobsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimeSchedulesIdWorkflowJobsGetResponse200HydraSearch
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

    public function getHydraView(): RuntimeSchedulesIdWorkflowJobsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimeSchedulesIdWorkflowJobsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimeSchedulesIdWorkflowJobsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimeSchedulesIdWorkflowJobsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
