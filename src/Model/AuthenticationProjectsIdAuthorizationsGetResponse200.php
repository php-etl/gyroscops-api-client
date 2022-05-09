<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AuthenticationProjectsIdAuthorizationsGetResponse200
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
     * @var AuthenticationProjectsIdAuthorizationsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var AuthenticationProjectsIdAuthorizationsGetResponse200HydraSearch
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

    public function getHydraView(): AuthenticationProjectsIdAuthorizationsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(AuthenticationProjectsIdAuthorizationsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): AuthenticationProjectsIdAuthorizationsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(AuthenticationProjectsIdAuthorizationsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
