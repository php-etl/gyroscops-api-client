<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimePipelinesCompilationGetResponse200
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
     * @var RuntimePipelinesCompilationGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimePipelinesCompilationGetResponse200HydraSearch|null
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

    public function getHydraView(): ?RuntimePipelinesCompilationGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimePipelinesCompilationGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimePipelinesCompilationGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimePipelinesCompilationGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
