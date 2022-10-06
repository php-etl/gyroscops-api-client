<?php

namespace Gyroscops\Api\Model;

class RuntimePipelinesGetResponse200
{
    /**
     * @var PipelineJsonldRead[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimePipelinesGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimePipelinesGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return PipelineJsonldRead[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param PipelineJsonldRead[]|null $hydraMember
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

    public function getHydraView(): ?RuntimePipelinesGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimePipelinesGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimePipelinesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimePipelinesGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
