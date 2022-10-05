<?php

namespace Gyroscops\Api\Model;

class EnvironmentSecretIdPutPutResponse200
{
    /**
     * @var SecretJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var EnvironmentSecretIdPutPutResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var EnvironmentSecretIdPutPutResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return SecretJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param SecretJsonld[] $hydraMember
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

    public function getHydraView(): EnvironmentSecretIdPutPutResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(EnvironmentSecretIdPutPutResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): EnvironmentSecretIdPutPutResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(EnvironmentSecretIdPutPutResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
