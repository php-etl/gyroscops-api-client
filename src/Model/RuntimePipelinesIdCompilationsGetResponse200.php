<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimePipelinesIdCompilationsGetResponse200
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
     * @var RuntimePipelinesIdCompilationsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimePipelinesIdCompilationsGetResponse200HydraSearch
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

    public function getHydraView(): RuntimePipelinesIdCompilationsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimePipelinesIdCompilationsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimePipelinesIdCompilationsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimePipelinesIdCompilationsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
