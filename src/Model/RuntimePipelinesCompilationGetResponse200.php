<?php

namespace Gyroscops\Api\Model;

class RuntimePipelinesCompilationGetResponse200
{
    /**
     * @var PipelineCompilationJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimePipelinesCompilationGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimePipelinesCompilationGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return PipelineCompilationJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param PipelineCompilationJsonld[] $hydraMember
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

    public function getHydraView(): RuntimePipelinesCompilationGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimePipelinesCompilationGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimePipelinesCompilationGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimePipelinesCompilationGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
