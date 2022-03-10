<?php

namespace Gyroscops\Api\Model;

class PipelineRead
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