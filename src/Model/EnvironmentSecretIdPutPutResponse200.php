<?php

namespace Gyroscops\Api\Model;

class EnvironmentSecretIdPutPutResponse200
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
     * @var EnvironmentSecretIdPutPutResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var EnvironmentSecretIdPutPutResponse200HydraSearch
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
     * @return EnvironmentSecretIdPutPutResponse200HydraView
     */
    public function getHydraView() : EnvironmentSecretIdPutPutResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param EnvironmentSecretIdPutPutResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(EnvironmentSecretIdPutPutResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return EnvironmentSecretIdPutPutResponse200HydraSearch
     */
    public function getHydraSearch() : EnvironmentSecretIdPutPutResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param EnvironmentSecretIdPutPutResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(EnvironmentSecretIdPutPutResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}