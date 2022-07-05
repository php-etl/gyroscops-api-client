<?php

namespace Gyroscops\Api\Model;

class EnvironmentVariableFromSecretsGetResponse200
{
    /**
     * 
     *
     * @var VariableFromSecretJsonld[]
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
     * @var EnvironmentVariableFromSecretsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var EnvironmentVariableFromSecretsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return VariableFromSecretJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param VariableFromSecretJsonld[] $hydraMember
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
     * @return EnvironmentVariableFromSecretsGetResponse200HydraView
     */
    public function getHydraView() : EnvironmentVariableFromSecretsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param EnvironmentVariableFromSecretsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(EnvironmentVariableFromSecretsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return EnvironmentVariableFromSecretsGetResponse200HydraSearch
     */
    public function getHydraSearch() : EnvironmentVariableFromSecretsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param EnvironmentVariableFromSecretsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(EnvironmentVariableFromSecretsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}