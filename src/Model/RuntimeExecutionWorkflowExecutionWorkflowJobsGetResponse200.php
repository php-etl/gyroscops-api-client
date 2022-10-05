<?php

namespace Gyroscops\Api\Model;

class RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200
{
    /**
     * @var ExecutionWorkflowJobJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return ExecutionWorkflowJobJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param ExecutionWorkflowJobJsonld[] $hydraMember
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

    public function getHydraView(): RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
