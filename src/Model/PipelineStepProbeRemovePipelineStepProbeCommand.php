<?php

namespace Gyroscops\Api\Model;

class PipelineStepProbeRemovePipelineStepProbeCommand
{
    /**
     * 
     *
     * @var mixed
     */
    protected $id;
    /**
     * 
     *
     * @var mixed
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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param mixed $code
     *
     * @return self
     */
    public function setCode($code) : self
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