<?php

namespace Gyroscops\Api\Model;

class AuthenticationUsersGetResponse200
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
     * @var AuthenticationUsersGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var AuthenticationUsersGetResponse200HydraSearch
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
     * @return AuthenticationUsersGetResponse200HydraView
     */
    public function getHydraView() : AuthenticationUsersGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param AuthenticationUsersGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(AuthenticationUsersGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return AuthenticationUsersGetResponse200HydraSearch
     */
    public function getHydraSearch() : AuthenticationUsersGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param AuthenticationUsersGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(AuthenticationUsersGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}