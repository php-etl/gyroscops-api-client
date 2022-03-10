<?php

namespace Gyroscops\Api\Model;

class PipelineJsonldRead
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
    protected $id2;
    /**
     * 
     *
     * @var string
     */
    protected $code;
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
    protected $runtimeType;
    /**
     * 
     *
     * @var string[]
     */
    protected $runtime;
    /**
     * 
     *
     * @var string[]
     */
    protected $autoload;
    /**
     * 
     *
     * @var string[]
     */
    protected $steps;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $compiledAt;
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
    public function getRuntimeType() : string
    {
        return $this->runtimeType;
    }
    /**
     * 
     *
     * @param string $runtimeType
     *
     * @return self
     */
    public function setRuntimeType(string $runtimeType) : self
    {
        $this->runtimeType = $runtimeType;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getRuntime() : array
    {
        return $this->runtime;
    }
    /**
     * 
     *
     * @param string[] $runtime
     *
     * @return self
     */
    public function setRuntime(array $runtime) : self
    {
        $this->runtime = $runtime;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getAutoload() : array
    {
        return $this->autoload;
    }
    /**
     * 
     *
     * @param string[] $autoload
     *
     * @return self
     */
    public function setAutoload(array $autoload) : self
    {
        $this->autoload = $autoload;
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
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCompiledAt() : ?\DateTime
    {
        return $this->compiledAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $compiledAt
     *
     * @return self
     */
    public function setCompiledAt(?\DateTime $compiledAt) : self
    {
        $this->compiledAt = $compiledAt;
        return $this;
    }
}