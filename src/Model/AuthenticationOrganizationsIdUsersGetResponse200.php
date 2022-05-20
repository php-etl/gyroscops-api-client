<?php

namespace Gyroscops\Api\Model;

class AuthenticationOrganizationsIdUsersGetResponse200
{
    /**
     * 
     *
     * @var UserJsonld[]
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
     * @var AuthenticationOrganizationsIdUsersGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var AuthenticationOrganizationsIdUsersGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return UserJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param UserJsonld[] $hydraMember
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
     * @return AuthenticationOrganizationsIdUsersGetResponse200HydraView
     */
    public function getHydraView() : AuthenticationOrganizationsIdUsersGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param AuthenticationOrganizationsIdUsersGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(AuthenticationOrganizationsIdUsersGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return AuthenticationOrganizationsIdUsersGetResponse200HydraSearch
     */
    public function getHydraSearch() : AuthenticationOrganizationsIdUsersGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param AuthenticationOrganizationsIdUsersGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(AuthenticationOrganizationsIdUsersGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}