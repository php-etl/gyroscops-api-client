<?php

namespace Gyroscops\Api\Model;

class AuthenticationWorkspacesIdAuthorizationsGetResponse200
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
     * @var AuthenticationWorkspacesIdAuthorizationsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var AuthenticationWorkspacesIdAuthorizationsGetResponse200HydraSearch
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
     * @return AuthenticationWorkspacesIdAuthorizationsGetResponse200HydraView
     */
    public function getHydraView() : AuthenticationWorkspacesIdAuthorizationsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param AuthenticationWorkspacesIdAuthorizationsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(AuthenticationWorkspacesIdAuthorizationsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return AuthenticationWorkspacesIdAuthorizationsGetResponse200HydraSearch
     */
    public function getHydraSearch() : AuthenticationWorkspacesIdAuthorizationsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param AuthenticationWorkspacesIdAuthorizationsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(AuthenticationWorkspacesIdAuthorizationsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}