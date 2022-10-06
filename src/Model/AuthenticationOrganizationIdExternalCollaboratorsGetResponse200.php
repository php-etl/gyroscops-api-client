<?php

namespace Gyroscops\Api\Model;

class AuthenticationOrganizationIdExternalCollaboratorsGetResponse200
{
    /**
     * @var UserJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationOrganizationIdExternalCollaboratorsGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var AuthenticationOrganizationIdExternalCollaboratorsGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return UserJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param UserJsonld[]|null $hydraMember
     */
    public function setHydraMember(?array $hydraMember): self
    {
        $this->hydraMember = $hydraMember;

        return $this;
    }

    public function getHydraTotalItems(): ?int
    {
        return $this->hydraTotalItems;
    }

    public function setHydraTotalItems(?int $hydraTotalItems): self
    {
        $this->hydraTotalItems = $hydraTotalItems;

        return $this;
    }

    public function getHydraView(): ?AuthenticationOrganizationIdExternalCollaboratorsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?AuthenticationOrganizationIdExternalCollaboratorsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?AuthenticationOrganizationIdExternalCollaboratorsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?AuthenticationOrganizationIdExternalCollaboratorsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
