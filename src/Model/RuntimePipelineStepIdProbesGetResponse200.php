<?php

namespace Gyroscops\Api\Model;

class RuntimePipelineStepIdProbesGetResponse200
{
    /**
     * @var PipelineStepProbeJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimePipelineStepIdProbesGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimePipelineStepIdProbesGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return PipelineStepProbeJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param PipelineStepProbeJsonld[]|null $hydraMember
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

    public function getHydraView(): ?RuntimePipelineStepIdProbesGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimePipelineStepIdProbesGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimePipelineStepIdProbesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimePipelineStepIdProbesGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
