<?php

namespace Gyroscops\Api\Model;

class EnvironmentVariableFromSecretsGetResponse200
{
    /**
     * @var VariableFromSecretJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var EnvironmentVariableFromSecretsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var EnvironmentVariableFromSecretsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return VariableFromSecretJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param VariableFromSecretJsonld[] $hydraMember
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

    public function getHydraView(): EnvironmentVariableFromSecretsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(EnvironmentVariableFromSecretsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): EnvironmentVariableFromSecretsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(EnvironmentVariableFromSecretsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
