<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimePipelineCompilationsGetResponse200
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
     * @var RuntimePipelineCompilationsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimePipelineCompilationsGetResponse200HydraSearch
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

    public function getHydraView(): RuntimePipelineCompilationsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimePipelineCompilationsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimePipelineCompilationsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimePipelineCompilationsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
