<?php

namespace Gyroscops\Api\Model;

class PipelineStepAppendPipelineStepCommandJsonld
{
    /**
     * 
     *
     * @var mixed
     */
    protected $context;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var PipelineIdJsonld
     */
    protected $id2;
    /**
     * 
     *
     * @var StepCodeJsonld
     */
    protected $code;
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var string[]
     */
    protected $configuration;
    /**
     * 
     *
     * @var ProbeListJsonld
     */
    protected $probes;
    /**
     * 
     *
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }
    /**
     * 
     *
     * @param mixed $context
     *
     * @return self
     */
    public function setContext($context) : self
    {
        $this->context = $context;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return PipelineIdJsonld
     */
    public function getId2() : PipelineIdJsonld
    {
        return $this->id2;
    }
    /**
     * 
     *
     * @param PipelineIdJsonld $id2
     *
     * @return self
     */
    public function setId2(PipelineIdJsonld $id2) : self
    {
        $this->id2 = $id2;
        return $this;
    }
    /**
     * 
     *
     * @return StepCodeJsonld
     */
    public function getCode() : StepCodeJsonld
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param StepCodeJsonld $code
     *
     * @return self
     */
    public function setCode(StepCodeJsonld $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getConfiguration() : array
    {
        return $this->configuration;
    }
    /**
     * 
     *
     * @param string[] $configuration
     *
     * @return self
     */
    public function setConfiguration(array $configuration) : self
    {
        $this->configuration = $configuration;
        return $this;
    }
    /**
     * 
     *
     * @return ProbeListJsonld
     */
    public function getProbes() : ProbeListJsonld
    {
        return $this->probes;
    }
    /**
     * 
     *
     * @param ProbeListJsonld $probes
     *
     * @return self
     */
    public function setProbes(ProbeListJsonld $probes) : self
    {
        $this->probes = $probes;
        return $this;
    }
}