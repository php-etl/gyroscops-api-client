<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AuthenticationWorkspacesGetResponse200
{
    /**
     * @var WorkspaceJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationWorkspacesGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var AuthenticationWorkspacesGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return WorkspaceJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param WorkspaceJsonld[]|null $hydraMember
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

    public function getHydraView(): ?AuthenticationWorkspacesGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?AuthenticationWorkspacesGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?AuthenticationWorkspacesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?AuthenticationWorkspacesGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
