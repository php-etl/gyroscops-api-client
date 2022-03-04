<?php

namespace Gyroscops\Api\Model;

class ExecutionPipelineJob
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
     * @var string[]
     */
    protected $steps;
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
    /**
     * 
     *
     * @return string[]
     */
    public function getSteps() : array
    {
        return $this->steps;
    }
    /**
     * 
     *
     * @param string[] $steps
     *
     * @return self
     */
    public function setSteps(array $steps) : self
    {
        $this->steps = $steps;
        return $this;
    }
}