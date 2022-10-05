<?php

namespace Gyroscops\Api\Model;

class AuthenticationWorkspacesGetResponse200
{
    /**
     * @var WorkspaceJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationWorkspacesGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var AuthenticationWorkspacesGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return WorkspaceJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param WorkspaceJsonld[] $hydraMember
     */
    public function setHydraMember(array $hydraMember): self
    {
        $this->hydraMember = $hydraMember;

        return $this;
    }

    public function getHydraTotalItems(): int
    {
        return $this->hydraTotalItems;
    }

    public function setHydraTotalItems(int $hydraTotalItems): self
    {
        $this->hydraTotalItems = $hydraTotalItems;

        return $this;
    }

    public function getHydraView(): AuthenticationWorkspacesGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(AuthenticationWorkspacesGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): AuthenticationWorkspacesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(AuthenticationWorkspacesGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
