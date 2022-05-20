<?php

namespace Gyroscops\Api\Model;

class EnvironmentSecretsGetResponse200
{
    /**
     * 
     *
     * @var SecretJsonld[]
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
     * @var EnvironmentSecretsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var EnvironmentSecretsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return SecretJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param SecretJsonld[] $hydraMember
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
     * @return EnvironmentSecretsGetResponse200HydraView
     */
    public function getHydraView() : EnvironmentSecretsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param EnvironmentSecretsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(EnvironmentSecretsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return EnvironmentSecretsGetResponse200HydraSearch
     */
    public function getHydraSearch() : EnvironmentSecretsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param EnvironmentSecretsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(EnvironmentSecretsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}