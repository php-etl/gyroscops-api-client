<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200
{
    /**
     * @var ExecutionPipelineStepJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return ExecutionPipelineStepJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param ExecutionPipelineStepJsonld[] $hydraMember
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

    public function getHydraView(): RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimeExecutionWorkflowExecutionWorkflowJobsIdPipelineStepsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
