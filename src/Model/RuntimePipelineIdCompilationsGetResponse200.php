<?php

namespace Gyroscops\Api\Model;

class RuntimePipelineIdCompilationsGetResponse200
{
    /**
     * @var PipelineCompilationJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimePipelineIdCompilationsGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimePipelineIdCompilationsGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return PipelineCompilationJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param PipelineCompilationJsonld[]|null $hydraMember
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

    public function getHydraView(): ?RuntimePipelineIdCompilationsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimePipelineIdCompilationsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimePipelineIdCompilationsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimePipelineIdCompilationsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
