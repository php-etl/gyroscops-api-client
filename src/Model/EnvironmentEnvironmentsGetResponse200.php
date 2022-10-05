<?php

namespace Gyroscops\Api\Model;

class EnvironmentEnvironmentsGetResponse200
{
    /**
     * @var EnvironmentJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var EnvironmentEnvironmentsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var EnvironmentEnvironmentsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return EnvironmentJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param EnvironmentJsonld[] $hydraMember
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

    public function getHydraView(): EnvironmentEnvironmentsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(EnvironmentEnvironmentsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): EnvironmentEnvironmentsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(EnvironmentEnvironmentsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
