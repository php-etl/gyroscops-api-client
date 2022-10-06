<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimeSchedulesGetResponse200
{
    /**
     * @var ScheduleJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimeSchedulesGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimeSchedulesGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return ScheduleJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param ScheduleJsonld[]|null $hydraMember
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

    public function getHydraView(): ?RuntimeSchedulesGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimeSchedulesGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimeSchedulesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimeSchedulesGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
