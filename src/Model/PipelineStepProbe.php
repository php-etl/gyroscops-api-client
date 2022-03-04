<?php

namespace Gyroscops\Api\Model;

class PipelineStepProbe
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
     * @var int
     */
    protected $order;
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var string
     */
    protected $step;
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
     * @return int
     */
    public function getOrder() : int
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param int $order
     *
     * @return self
     */
    public function setOrder(int $order) : self
    {
        $this->order = $order;
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
     * @return string
     */
    public function getStep() : string
    {
        return $this->step;
    }
    /**
     * 
     *
     * @param string $step
     *
     * @return self
     */
    public function setStep(string $step) : self
    {
        $this->step = $step;
        return $this;
    }
}