<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimeScheduleIdExecutionsGetResponse200
{
    /**
     * @var ExecutionJsonldRead[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimeScheduleIdExecutionsGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimeScheduleIdExecutionsGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return ExecutionJsonldRead[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param ExecutionJsonldRead[]|null $hydraMember
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

    public function getHydraView(): ?RuntimeScheduleIdExecutionsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimeScheduleIdExecutionsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimeScheduleIdExecutionsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimeScheduleIdExecutionsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
