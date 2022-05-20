<?php

namespace Gyroscops\Api\Model;

class ExecutionWorkflow
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
     * @var string[]
     */
    protected $jobs;
    /**
     * 
     *
     * @var string
     */
    protected $execution;
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
     * @return string[]
     */
    public function getJobs() : array
    {
        return $this->jobs;
    }
    /**
     * 
     *
     * @param string[] $jobs
     *
     * @return self
     */
    public function setJobs(array $jobs) : self
    {
        $this->jobs = $jobs;
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
}