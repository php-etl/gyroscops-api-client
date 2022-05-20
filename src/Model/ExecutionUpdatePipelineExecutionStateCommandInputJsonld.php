<?php

namespace Gyroscops\Api\Model;

class ExecutionUpdatePipelineExecutionStateCommandInputJsonld
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
     * @var string
     */
    protected $execution;
    /**
     * 
     *
     * @var UpdateListJsonld
     */
    protected $stepsUpdates;
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
     * @return string
     */
    public function getExecution() : string
    {
        return $this->execution;
    }
    /**
     * 
     *
     * @param string $execution
     *
     * @return self
     */
    public function setExecution(string $execution) : self
    {
        $this->execution = $execution;
        return $this;
    }
    /**
     * 
     *
     * @return UpdateListJsonld
     */
    public function getStepsUpdates() : UpdateListJsonld
    {
        return $this->stepsUpdates;
    }
    /**
     * 
     *
     * @param UpdateListJsonld $stepsUpdates
     *
     * @return self
     */
    public function setStepsUpdates(UpdateListJsonld $stepsUpdates) : self
    {
        $this->stepsUpdates = $stepsUpdates;
        return $this;
    }
}