<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200
{
    /**
     * @var UserJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return UserJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param UserJsonld[] $hydraMember
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

    public function getHydraView(): AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
