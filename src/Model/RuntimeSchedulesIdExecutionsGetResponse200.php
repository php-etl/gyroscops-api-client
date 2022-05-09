<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimeSchedulesIdExecutionsGetResponse200
{
    /**
     * @var ExecutionJsonldRead[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimeSchedulesIdExecutionsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimeSchedulesIdExecutionsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return ExecutionJsonldRead[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param ExecutionJsonldRead[] $hydraMember
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

    public function getHydraView(): RuntimeSchedulesIdExecutionsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimeSchedulesIdExecutionsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimeSchedulesIdExecutionsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimeSchedulesIdExecutionsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
