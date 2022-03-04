<?php

namespace Gyroscops\Api\Model;

class ExecutionAction
{
    /**
     * 
     *
     * @var string|null
     */
    protected $execution;
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
    public function getExecution() : ?string
    {
        return $this->execution;
    }
    /**
     * 
     *
     * @param string|null $execution
     *
     * @return self
     */
    public function setExecution(?string $execution) : self
    {
        $this->execution = $execution;
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