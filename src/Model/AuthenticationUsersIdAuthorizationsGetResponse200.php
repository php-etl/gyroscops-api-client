<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AuthenticationUsersIdAuthorizationsGetResponse200
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
     * @var AuthenticationUsersIdAuthorizationsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var AuthenticationUsersIdAuthorizationsGetResponse200HydraSearch
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

    public function getHydraView(): AuthenticationUsersIdAuthorizationsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(AuthenticationUsersIdAuthorizationsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): AuthenticationUsersIdAuthorizationsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(AuthenticationUsersIdAuthorizationsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
