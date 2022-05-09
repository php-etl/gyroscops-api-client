<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AuthenticationOrganizationsIdAuthorizationsGetResponse200
{
    /**
     * @var UserAuthorizationJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return UserAuthorizationJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param UserAuthorizationJsonld[] $hydraMember
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

    public function getHydraView(): AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
