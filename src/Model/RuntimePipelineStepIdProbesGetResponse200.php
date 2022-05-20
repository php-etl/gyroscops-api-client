<?php

namespace Gyroscops\Api\Model;

class RuntimePipelineStepIdProbesGetResponse200
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
     * @var RuntimePipelineStepIdProbesGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var RuntimePipelineStepIdProbesGetResponse200HydraSearch
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
     * @return RuntimePipelineStepIdProbesGetResponse200HydraView
     */
    public function getHydraView() : RuntimePipelineStepIdProbesGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param RuntimePipelineStepIdProbesGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(RuntimePipelineStepIdProbesGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return RuntimePipelineStepIdProbesGetResponse200HydraSearch
     */
    public function getHydraSearch() : RuntimePipelineStepIdProbesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param RuntimePipelineStepIdProbesGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(RuntimePipelineStepIdProbesGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}