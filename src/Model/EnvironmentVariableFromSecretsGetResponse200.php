<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class EnvironmentVariableFromSecretsGetResponse200
{
    /**
     * @var VariableFromSecretJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var EnvironmentVariableFromSecretsGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var EnvironmentVariableFromSecretsGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return VariableFromSecretJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param VariableFromSecretJsonld[]|null $hydraMember
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

    public function getHydraView(): ?EnvironmentVariableFromSecretsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?EnvironmentVariableFromSecretsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?EnvironmentVariableFromSecretsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?EnvironmentVariableFromSecretsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
