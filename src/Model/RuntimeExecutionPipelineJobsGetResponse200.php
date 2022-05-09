<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimeExecutionPipelineJobsGetResponse200
{
    /**
     * @var ExecutionPipelineJobJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimeExecutionPipelineJobsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimeExecutionPipelineJobsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return ExecutionPipelineJobJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param ExecutionPipelineJobJsonld[] $hydraMember
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

    public function getHydraView(): RuntimeExecutionPipelineJobsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimeExecutionPipelineJobsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimeExecutionPipelineJobsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimeExecutionPipelineJobsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
