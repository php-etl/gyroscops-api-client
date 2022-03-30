<?php

namespace Gyroscops\Api\Model;

class ExecutionJsonldRead
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
    protected $code;
    /**
     * 
     *
     * @var string
     */
    protected $status = 'unknown';
    /**
     * 
     *
     * @var int
     */
    protected $errors;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $scheduledAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $startedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $finishedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $interruptedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $resumedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $terminatedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $reason;
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
     * @var mixed|null
     */
    protected $action;
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
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getErrors() : int
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param int $errors
     *
     * @return self
     */
    public function setErrors(int $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getScheduledAt() : ?\DateTime
    {
        return $this->scheduledAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $scheduledAt
     *
     * @return self
     */
    public function setScheduledAt(?\DateTime $scheduledAt) : self
    {
        $this->scheduledAt = $scheduledAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getStartedAt() : ?\DateTime
    {
        return $this->startedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $startedAt
     *
     * @return self
     */
    public function setStartedAt(?\DateTime $startedAt) : self
    {
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getFinishedAt() : ?\DateTime
    {
        return $this->finishedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $finishedAt
     *
     * @return self
     */
    public function setFinishedAt(?\DateTime $finishedAt) : self
    {
        $this->finishedAt = $finishedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getInterruptedAt() : ?\DateTime
    {
        return $this->interruptedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $interruptedAt
     *
     * @return self
     */
    public function setInterruptedAt(?\DateTime $interruptedAt) : self
    {
        $this->interruptedAt = $interruptedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getResumedAt() : ?\DateTime
    {
        return $this->resumedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $resumedAt
     *
     * @return self
     */
    public function setResumedAt(?\DateTime $resumedAt) : self
    {
        $this->resumedAt = $resumedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getTerminatedAt() : ?\DateTime
    {
        return $this->terminatedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $terminatedAt
     *
     * @return self
     */
    public function setTerminatedAt(?\DateTime $terminatedAt) : self
    {
        $this->terminatedAt = $terminatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReason() : ?string
    {
        return $this->reason;
    }
    /**
     * 
     *
     * @param string|null $reason
     *
     * @return self
     */
    public function setReason(?string $reason) : self
    {
        $this->reason = $reason;
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
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * 
     *
     * @param mixed $action
     *
     * @return self
     */
    public function setAction($action) : self
    {
        $this->action = $action;
        return $this;
    }
}