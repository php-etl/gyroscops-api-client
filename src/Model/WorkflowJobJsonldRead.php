<?php

namespace Gyroscops\Api\Model;

class WorkflowJobJsonldRead
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