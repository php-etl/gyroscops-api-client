<?php

namespace Gyroscops\Api\Model;

class ExecutionWorkflowJobAction
{
    /**
     * 
     *
     * @var string|null
     */
    protected $job;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @return string|null
     */
    public function getJob() : ?string
    {
        return $this->job;
    }
    /**
     * 
     *
     * @param string|null $job
     *
     * @return self
     */
    public function setJob(?string $job) : self
    {
        $this->job = $job;
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
}