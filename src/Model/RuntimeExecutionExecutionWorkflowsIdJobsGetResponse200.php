<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimeExecutionExecutionWorkflowsIdJobsGetResponse200
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
     * @var RuntimeExecutionExecutionWorkflowsIdJobsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimeExecutionExecutionWorkflowsIdJobsGetResponse200HydraSearch
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

    public function getHydraView(): RuntimeExecutionExecutionWorkflowsIdJobsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimeExecutionExecutionWorkflowsIdJobsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimeExecutionExecutionWorkflowsIdJobsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimeExecutionExecutionWorkflowsIdJobsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
