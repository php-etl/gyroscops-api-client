<?php

namespace Gyroscops\Api\Model;

class AuthenticationWorkspacesIdUsersGetResponse200
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
     * @var AuthenticationWorkspacesIdUsersGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var AuthenticationWorkspacesIdUsersGetResponse200HydraSearch
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
     * @return AuthenticationWorkspacesIdUsersGetResponse200HydraView
     */
    public function getHydraView() : AuthenticationWorkspacesIdUsersGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param AuthenticationWorkspacesIdUsersGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(AuthenticationWorkspacesIdUsersGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return AuthenticationWorkspacesIdUsersGetResponse200HydraSearch
     */
    public function getHydraSearch() : AuthenticationWorkspacesIdUsersGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param AuthenticationWorkspacesIdUsersGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(AuthenticationWorkspacesIdUsersGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}