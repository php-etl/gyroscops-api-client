<?php

namespace Gyroscops\Api\Model;

class WorkflowJobRead
{
    /**
     * 
     *
     * @var mixed|null
     */
    protected $workflow;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $pipeline;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $action;
    /**
     * 
     *
     * @return mixed
     */
    public function getWorkflow()
    {
        return $this->workflow;
    }
    /**
     * 
     *
     * @param mixed $workflow
     *
     * @return self
     */
    public function setWorkflow($workflow) : self
    {
        $this->workflow = $workflow;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPipeline()
    {
        return $this->pipeline;
    }
    /**
     * 
     *
     * @param mixed $pipeline
     *
     * @return self
     */
    public function setPipeline($pipeline) : self
    {
        $this->pipeline = $pipeline;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * 
     *
     * @param mixed $action
     *
     * @return self
     */
    public function setAction($action) : self
    {
        $this->action = $action;
        return $this;
    }
}