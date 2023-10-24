<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class RuntimePipelineStepProbesGetLdjsonResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var PipelineStepProbeJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimePipelineStepProbesGetLdjsonResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimePipelineStepProbesGetLdjsonResponse200HydraSearch|null
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

    public function getHydraView(): ?RuntimePipelineStepProbesGetLdjsonResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimePipelineStepProbesGetLdjsonResponse200HydraView $hydraView): self
    {
        $this->initialized['hydraView'] = true;
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimePipelineStepProbesGetLdjsonResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimePipelineStepProbesGetLdjsonResponse200HydraSearch $hydraSearch): self
    {
        $this->initialized['hydraSearch'] = true;
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}