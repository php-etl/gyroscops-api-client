<?php

namespace Gyroscops\Api\Model;

class AuthenticationOrganizationsIdWorkspacesGetResponse200
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
     * @var AuthenticationOrganizationsIdWorkspacesGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var AuthenticationOrganizationsIdWorkspacesGetResponse200HydraSearch
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
     * @return AuthenticationOrganizationsIdWorkspacesGetResponse200HydraView
     */
    public function getHydraView() : AuthenticationOrganizationsIdWorkspacesGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param AuthenticationOrganizationsIdWorkspacesGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(AuthenticationOrganizationsIdWorkspacesGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return AuthenticationOrganizationsIdWorkspacesGetResponse200HydraSearch
     */
    public function getHydraSearch() : AuthenticationOrganizationsIdWorkspacesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param AuthenticationOrganizationsIdWorkspacesGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(AuthenticationOrganizationsIdWorkspacesGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}