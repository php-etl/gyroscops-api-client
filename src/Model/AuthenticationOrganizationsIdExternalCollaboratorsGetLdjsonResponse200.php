<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AuthenticationOrganizationsIdExternalCollaboratorsGetLdjsonResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var UserJsonldUserRead[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationOrganizationsIdExternalCollaboratorsGetLdjsonResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var AuthenticationOrganizationsIdExternalCollaboratorsGetLdjsonResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return UserJsonldUserRead[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param UserJsonldUserRead[]|null $hydraMember
     */
    public function setHydraMember(?array $hydraMember): self
    {
        $this->initialized['hydraMember'] = true;
        $this->hydraMember = $hydraMember;

        return $this;
    }

    public function getHydraTotalItems(): ?int
    {
        return $this->hydraTotalItems;
    }

    public function setHydraTotalItems(?int $hydraTotalItems): self
    {
        $this->initialized['hydraTotalItems'] = true;
        $this->hydraTotalItems = $hydraTotalItems;

        return $this;
    }

    public function getHydraView(): ?AuthenticationOrganizationsIdExternalCollaboratorsGetLdjsonResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?AuthenticationOrganizationsIdExternalCollaboratorsGetLdjsonResponse200HydraView $hydraView): self
    {
        $this->initialized['hydraView'] = true;
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?AuthenticationOrganizationsIdExternalCollaboratorsGetLdjsonResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?AuthenticationOrganizationsIdExternalCollaboratorsGetLdjsonResponse200HydraSearch $hydraSearch): self
    {
        $this->initialized['hydraSearch'] = true;
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
