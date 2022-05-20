<?php

namespace Gyroscops\Api\Model;

class RuntimePipelineStepProbesGetResponse200
{
    /**
     * 
     *
     * @var PipelineStepProbeJsonld[]
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
     * @var RuntimePipelineStepProbesGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimePipelineStepProbesGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return PipelineStepProbeJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param PipelineStepProbeJsonld[] $hydraMember
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
     * @return RuntimePipelineStepProbesGetResponse200HydraView
     */
    public function getHydraView() : RuntimePipelineStepProbesGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimePipelineStepProbesGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimePipelineStepProbesGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimePipelineStepProbesGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimePipelineStepProbesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimePipelineStepProbesGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimePipelineStepProbesGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}