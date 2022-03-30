<?php

namespace Gyroscops\Api\Model;

class PipelineDeclarePipelineCommandInput
{
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
     * @var StepInput[]
     */
    protected $steps;
    /**
     * 
     *
     * @var AutoloadInput[]
     */
    protected $autoloads;
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
     * @return StepInput[]
     */
    public function getSteps() : array
    {
        return $this->steps;
    }
    /**
     * 
     *
     * @param StepInput[] $steps
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
     * @return AutoloadInput[]
     */
    public function getAutoloads() : array
    {
        return $this->autoloads;
    }
    /**
     * 
     *
     * @param AutoloadInput[] $autoloads
     *
     * @return self
     */
    public function setAutoloads(array $autoloads) : self
    {
        $this->autoloads = $autoloads;
        return $this;
    }
}