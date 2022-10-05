<?php

namespace Gyroscops\Api\Model;

class AuthenticationUserIdAuthorizationsGetResponse200
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
     * @var AuthenticationUserIdAuthorizationsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var AuthenticationUserIdAuthorizationsGetResponse200HydraSearch
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

    public function getHydraView(): AuthenticationUserIdAuthorizationsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(AuthenticationUserIdAuthorizationsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): AuthenticationUserIdAuthorizationsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(AuthenticationUserIdAuthorizationsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
