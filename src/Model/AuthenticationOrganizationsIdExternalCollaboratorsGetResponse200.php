<?php

namespace Gyroscops\Api\Model;

class AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200
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
     * @var AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraSearch
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
     * @return AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraView
     */
    public function getHydraView() : AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraSearch
     */
    public function getHydraSearch() : AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(AuthenticationOrganizationsIdExternalCollaboratorsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}