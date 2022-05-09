<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AuthenticationOrganizationsIdProjectsGetResponse200
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
     * @var AuthenticationOrganizationsIdProjectsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var AuthenticationOrganizationsIdProjectsGetResponse200HydraSearch
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

    public function getHydraView(): AuthenticationOrganizationsIdProjectsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(AuthenticationOrganizationsIdProjectsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): AuthenticationOrganizationsIdProjectsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(AuthenticationOrganizationsIdProjectsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
