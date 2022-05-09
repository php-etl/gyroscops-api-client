<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimePipelineStepProbesGetResponse200
{
    /**
     * @var PipelineStepProbeJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimePipelineStepProbesGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimePipelineStepProbesGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return PipelineStepProbeJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param PipelineStepProbeJsonld[] $hydraMember
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

    public function getHydraView(): RuntimePipelineStepProbesGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimePipelineStepProbesGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimePipelineStepProbesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimePipelineStepProbesGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
