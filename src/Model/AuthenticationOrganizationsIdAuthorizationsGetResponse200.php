<?php

namespace Gyroscops\Api\Model;

class AuthenticationOrganizationsIdAuthorizationsGetResponse200
{
    /**
     * 
     *
     * @var UserAuthorizationJsonld[]
     */
    protected $hydraMember;
    /**
     * 
     *
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * 
     *
     * @var AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return UserAuthorizationJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param UserAuthorizationJsonld[] $hydraMember
     *
     * @return self
     */
    public function setHydraMember(array $hydraMember) : self
    {
        $this->hydraMember = $hydraMember;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHydraTotalItems() : int
    {
        return $this->hydraTotalItems;
    }
    /**
     * 
     *
     * @param int $hydraTotalItems
     *
     * @return self
     */
    public function setHydraTotalItems(int $hydraTotalItems) : self
    {
        $this->hydraTotalItems = $hydraTotalItems;
        return $this;
    }
    /**
     * 
     *
     * @return AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraView
     */
    public function getHydraView() : AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraSearch
     */
    public function getHydraSearch() : AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(AuthenticationOrganizationsIdAuthorizationsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}