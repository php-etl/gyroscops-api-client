<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200
{
    /**
     * @var ExecutionWorkflowJobJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return ExecutionWorkflowJobJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param ExecutionWorkflowJobJsonld[]|null $hydraMember
     */
    public function setHydraMember(?array $hydraMember): self
    {
        $this->hydraMember = $hydraMember;

        return $this;
    }

    public function getHydraTotalItems(): ?int
    {
        return $this->hydraTotalItems;
    }

    public function setHydraTotalItems(?int $hydraTotalItems): self
    {
        $this->hydraTotalItems = $hydraTotalItems;

        return $this;
    }

    public function getHydraView(): ?RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimeExecutionWorkflowExecutionWorkflowJobsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
