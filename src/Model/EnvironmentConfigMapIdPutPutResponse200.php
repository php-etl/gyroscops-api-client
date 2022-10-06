<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class EnvironmentConfigMapIdPutPutResponse200
{
    /**
     * @var ConfigMapJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var EnvironmentConfigMapIdPutPutResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var EnvironmentConfigMapIdPutPutResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return ConfigMapJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param ConfigMapJsonld[]|null $hydraMember
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

    public function getHydraView(): ?EnvironmentConfigMapIdPutPutResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?EnvironmentConfigMapIdPutPutResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?EnvironmentConfigMapIdPutPutResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?EnvironmentConfigMapIdPutPutResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
