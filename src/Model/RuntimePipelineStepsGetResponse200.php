<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimePipelineStepsGetResponse200
{
    /**
     * @var PipelineStepJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimePipelineStepsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimePipelineStepsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return PipelineStepJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param PipelineStepJsonld[] $hydraMember
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

    public function getHydraView(): RuntimePipelineStepsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimePipelineStepsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimePipelineStepsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimePipelineStepsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
