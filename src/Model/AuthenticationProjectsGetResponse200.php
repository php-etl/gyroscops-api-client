<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AuthenticationProjectsGetResponse200
{
    /**
     * @var ProjectJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationProjectsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var AuthenticationProjectsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return ProjectJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param ProjectJsonld[] $hydraMember
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

    public function getHydraView(): AuthenticationProjectsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(AuthenticationProjectsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): AuthenticationProjectsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(AuthenticationProjectsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
