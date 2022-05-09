<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AuthenticationMeGetResponse200
{
    /**
     * @var UserJsonld[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var AuthenticationMeGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var AuthenticationMeGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return UserJsonld[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param UserJsonld[] $hydraMember
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

    public function getHydraView(): AuthenticationMeGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(AuthenticationMeGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): AuthenticationMeGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(AuthenticationMeGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
