<?php

namespace Gyroscops\Api\Model;

class RuntimeExecutionWorkflowExecutionWorkflowJobIdPipelineStepsGetResponse200
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
     * @var RuntimeExecutionWorkflowExecutionWorkflowJobIdPipelineStepsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimeExecutionWorkflowExecutionWorkflowJobIdPipelineStepsGetResponse200HydraSearch
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

    public function getHydraView(): RuntimeExecutionWorkflowExecutionWorkflowJobIdPipelineStepsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimeExecutionWorkflowExecutionWorkflowJobIdPipelineStepsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimeExecutionWorkflowExecutionWorkflowJobIdPipelineStepsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimeExecutionWorkflowExecutionWorkflowJobIdPipelineStepsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
