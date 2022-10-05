<?php

namespace Gyroscops\Api\Model;

class EnvironmentVariableFromConfigMapsGetResponse200
{
    /**
     * @var VariableFromConfigMapJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var EnvironmentVariableFromConfigMapsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var EnvironmentVariableFromConfigMapsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return VariableFromConfigMapJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param VariableFromConfigMapJsonld[] $hydraMember
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

    public function getHydraView(): EnvironmentVariableFromConfigMapsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(EnvironmentVariableFromConfigMapsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): EnvironmentVariableFromConfigMapsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(EnvironmentVariableFromConfigMapsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
