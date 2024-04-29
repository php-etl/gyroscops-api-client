<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimePipelinesStepsIdProbesGetLdjsonResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var PipelineStepProbeJsonldStepProbeRead[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimePipelinesStepsIdProbesGetLdjsonResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimePipelinesStepsIdProbesGetLdjsonResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return PipelineStepProbeJsonldStepProbeRead[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param PipelineStepProbeJsonldStepProbeRead[]|null $hydraMember
     */
    public function setHydraMember(?array $hydraMember): self
    {
        $this->initialized['hydraMember'] = true;
        $this->hydraMember = $hydraMember;

        return $this;
    }

    public function getHydraTotalItems(): ?int
    {
        return $this->hydraTotalItems;
    }

    public function setHydraTotalItems(?int $hydraTotalItems): self
    {
        $this->initialized['hydraTotalItems'] = true;
        $this->hydraTotalItems = $hydraTotalItems;

        return $this;
    }

    public function getHydraView(): ?RuntimePipelinesStepsIdProbesGetLdjsonResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimePipelinesStepsIdProbesGetLdjsonResponse200HydraView $hydraView): self
    {
        $this->initialized['hydraView'] = true;
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimePipelinesStepsIdProbesGetLdjsonResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimePipelinesStepsIdProbesGetLdjsonResponse200HydraSearch $hydraSearch): self
    {
        $this->initialized['hydraSearch'] = true;
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
