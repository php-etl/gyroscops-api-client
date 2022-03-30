<?php

namespace Gyroscops\Api\Model;

class ExecutionWorkflowJob
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
     * @var string|null
     */
    protected $workflow;
    /**
     * 
     *
     * @var string|null
     */
    protected $pipeline;
    /**
     * 
     *
     * @var string|null
     */
    protected $action;
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
     * @return string|null
     */
    public function getWorkflow() : ?string
    {
        return $this->workflow;
    }
    /**
     * 
     *
     * @param string|null $workflow
     *
     * @return self
     */
    public function setWorkflow(?string $workflow) : self
    {
        $this->workflow = $workflow;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPipeline() : ?string
    {
        return $this->pipeline;
    }
    /**
     * 
     *
     * @param string|null $pipeline
     *
     * @return self
     */
    public function setPipeline(?string $pipeline) : self
    {
        $this->pipeline = $pipeline;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAction() : ?string
    {
        return $this->action;
    }
    /**
     * 
     *
     * @param string|null $action
     *
     * @return self
     */
    public function setAction(?string $action) : self
    {
        $this->action = $action;
        return $this;
    }
}