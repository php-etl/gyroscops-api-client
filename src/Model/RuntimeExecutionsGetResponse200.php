<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimeExecutionsGetResponse200
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
     * @var RuntimeExecutionsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var RuntimeExecutionsGetResponse200HydraSearch
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

    public function getHydraView(): RuntimeExecutionsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(RuntimeExecutionsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): RuntimeExecutionsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(RuntimeExecutionsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
