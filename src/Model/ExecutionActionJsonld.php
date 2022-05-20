<?php

namespace Gyroscops\Api\Model;

class ExecutionActionJsonld
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
     * @var string|null
     */
    protected $execution;
    /**
     * 
     *
     * @var string
     */
    protected $id2;
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
    public function getId2() : string
    {
        return $this->id2;
    }
    /**
     * 
     *
     * @param string $id2
     *
     * @return self
     */
    public function setId2(string $id2) : self
    {
        $this->id2 = $id2;
        return $this;
    }
}