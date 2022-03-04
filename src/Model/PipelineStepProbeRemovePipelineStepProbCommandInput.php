<?php

namespace Gyroscops\Api\Model;

class PipelineStepProbeRemovePipelineStepProbCommandInput
{
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
    protected $code;
    /**
     * 
     *
     * @var Probe
     */
    protected $probe;
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
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return Probe
     */
    public function getProbe() : Probe
    {
        return $this->probe;
    }
    /**
     * 
     *
     * @param Probe $probe
     *
     * @return self
     */
    public function setProbe(Probe $probe) : self
    {
        $this->probe = $probe;
        return $this;
    }
}