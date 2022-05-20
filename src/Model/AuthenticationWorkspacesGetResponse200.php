<?php

namespace Gyroscops\Api\Model;

class AuthenticationWorkspacesGetResponse200
{
    /**
     * 
     *
     * @var WorkspaceJsonld[]
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
     * @var AuthenticationWorkspacesGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var AuthenticationWorkspacesGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return WorkspaceJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param WorkspaceJsonld[] $hydraMember
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
     * @return AuthenticationWorkspacesGetResponse200HydraView
     */
    public function getHydraView() : AuthenticationWorkspacesGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param AuthenticationWorkspacesGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(AuthenticationWorkspacesGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return AuthenticationWorkspacesGetResponse200HydraSearch
     */
    public function getHydraSearch() : AuthenticationWorkspacesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param AuthenticationWorkspacesGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(AuthenticationWorkspacesGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}