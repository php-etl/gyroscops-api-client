<?php

namespace Gyroscops\Api\Model;

class VariableFromSecretsGetResponse200
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
     * @var VariableFromSecretsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var VariableFromSecretsGetResponse200HydraSearch
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
     * @return VariableFromSecretsGetResponse200HydraView
     */
    public function getHydraView() : VariableFromSecretsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param VariableFromSecretsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(VariableFromSecretsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return VariableFromSecretsGetResponse200HydraSearch
     */
    public function getHydraSearch() : VariableFromSecretsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param VariableFromSecretsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(VariableFromSecretsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}