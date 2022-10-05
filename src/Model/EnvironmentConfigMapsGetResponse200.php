<?php

namespace Gyroscops\Api\Model;

class EnvironmentConfigMapsGetResponse200
{
    /**
     * @var ConfigMapJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var EnvironmentConfigMapsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var EnvironmentConfigMapsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return ConfigMapJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param ConfigMapJsonld[] $hydraMember
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

    public function getHydraView(): EnvironmentConfigMapsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(EnvironmentConfigMapsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): EnvironmentConfigMapsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(EnvironmentConfigMapsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
