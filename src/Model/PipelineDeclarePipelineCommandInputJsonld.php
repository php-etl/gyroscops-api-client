<?php

namespace Gyroscops\Api\Model;

class PipelineDeclarePipelineCommandInputJsonld
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
    protected $label;
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
    protected $project;
    /**
     * 
     *
     * @var string|null
     */
    protected $organization;
    /**
     * 
     *
     * @var StepInputJsonld[]
     */
    protected $steps;
    /**
     * 
     *
     * @var AutoloadInputJsonld[]
     */
    protected $autoloads;
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
    public function getProject() : string
    {
        return $this->project;
    }
    /**
     * 
     *
     * @param string $project
     *
     * @return self
     */
    public function setProject(string $project) : self
    {
        $this->project = $project;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrganization() : ?string
    {
        return $this->organization;
    }
    /**
     * 
     *
     * @param string|null $organization
     *
     * @return self
     */
    public function setOrganization(?string $organization) : self
    {
        $this->organization = $organization;
        return $this;
    }
    /**
     * 
     *
     * @return StepInputJsonld[]
     */
    public function getSteps() : array
    {
        return $this->steps;
    }
    /**
     * 
     *
     * @param StepInputJsonld[] $steps
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
     * @return AutoloadInputJsonld[]
     */
    public function getAutoloads() : array
    {
        return $this->autoloads;
    }
    /**
     * 
     *
     * @param AutoloadInputJsonld[] $autoloads
     *
     * @return self
     */
    public function setAutoloads(array $autoloads) : self
    {
        $this->autoloads = $autoloads;
        return $this;
    }
}