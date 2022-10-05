<?php

namespace Gyroscops\Api\Model;

class RuntimeExecutionExecutionWorkflowIdJobsGetResponse200
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
     * @var RuntimeExecutionExecutionWorkflowIdJobsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimeExecutionExecutionWorkflowIdJobsGetResponse200HydraSearch
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

    public function getHydraView(): RuntimeExecutionExecutionWorkflowIdJobsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimeExecutionExecutionWorkflowIdJobsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimeExecutionExecutionWorkflowIdJobsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimeExecutionExecutionWorkflowIdJobsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
