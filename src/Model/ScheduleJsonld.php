<?php

namespace Gyroscops\Api\Model;

class ScheduleJsonld
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
    protected $type;
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
    protected $id2;
    /**
     * 
     *
     * @var string
     */
    protected $type2 = 'once';
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $startAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $interval;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $endAt;
    /**
     * 
     *
     * @var int|null
     */
    protected $recurrences;
    /**
     * 
     *
     * @var string[]
     */
    protected $executions;
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
    protected $workflow;
    /**
     * 
     *
     * @var string
     */
    protected $owner;
    /**
     * 
     *
     * @var string
     */
    protected $workspace;
    /**
     * 
     *
     * @var string
     */
    protected $organization;
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
    public function getType2() : string
    {
        return $this->type2;
    }
    /**
     * 
     *
     * @param string $type2
     *
     * @return self
     */
    public function setType2(string $type2) : self
    {
        $this->type2 = $type2;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getStartAt() : ?\DateTime
    {
        return $this->startAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $startAt
     *
     * @return self
     */
    public function setStartAt(?\DateTime $startAt) : self
    {
        $this->startAt = $startAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInterval() : ?string
    {
        return $this->interval;
    }
    /**
     * 
     *
     * @param string|null $interval
     *
     * @return self
     */
    public function setInterval(?string $interval) : self
    {
        $this->interval = $interval;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getEndAt() : ?\DateTime
    {
        return $this->endAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $endAt
     *
     * @return self
     */
    public function setEndAt(?\DateTime $endAt) : self
    {
        $this->endAt = $endAt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRecurrences() : ?int
    {
        return $this->recurrences;
    }
    /**
     * 
     *
     * @param int|null $recurrences
     *
     * @return self
     */
    public function setRecurrences(?int $recurrences) : self
    {
        $this->recurrences = $recurrences;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getExecutions() : array
    {
        return $this->executions;
    }
    /**
     * 
     *
     * @param string[] $executions
     *
     * @return self
     */
    public function setExecutions(array $executions) : self
    {
        $this->executions = $executions;
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
     * @return string
     */
    public function getOwner() : string
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param string $owner
     *
     * @return self
     */
    public function setOwner(string $owner) : self
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWorkspace() : string
    {
        return $this->workspace;
    }
    /**
     * 
     *
     * @param string $workspace
     *
     * @return self
     */
    public function setWorkspace(string $workspace) : self
    {
        $this->workspace = $workspace;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganization() : string
    {
        return $this->organization;
    }
    /**
     * 
     *
     * @param string $organization
     *
     * @return self
     */
    public function setOrganization(string $organization) : self
    {
        $this->organization = $organization;
        return $this;
    }
}