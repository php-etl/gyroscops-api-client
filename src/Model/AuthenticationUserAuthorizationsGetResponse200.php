<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AuthenticationUserAuthorizationsGetResponse200
{
    /**
     * @var UserAuthorizationJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationUserAuthorizationsGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var AuthenticationUserAuthorizationsGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return UserAuthorizationJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param UserAuthorizationJsonld[]|null $hydraMember
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

    public function getHydraView(): ?AuthenticationUserAuthorizationsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?AuthenticationUserAuthorizationsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?AuthenticationUserAuthorizationsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?AuthenticationUserAuthorizationsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
