<?php

namespace Gyroscops\Api\Model;

class ExecutionRead
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
     * @var string|null
     */
    protected $scheduledAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $startedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $finishedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $interruptedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $resumedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var string|null
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
     * @return string|null
     */
    public function getScheduledAt() : ?string
    {
        return $this->scheduledAt;
    }
    /**
     * 
     *
     * @param string|null $scheduledAt
     *
     * @return self
     */
    public function setScheduledAt(?string $scheduledAt) : self
    {
        $this->scheduledAt = $scheduledAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStartedAt() : ?string
    {
        return $this->startedAt;
    }
    /**
     * 
     *
     * @param string|null $startedAt
     *
     * @return self
     */
    public function setStartedAt(?string $startedAt) : self
    {
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFinishedAt() : ?string
    {
        return $this->finishedAt;
    }
    /**
     * 
     *
     * @param string|null $finishedAt
     *
     * @return self
     */
    public function setFinishedAt(?string $finishedAt) : self
    {
        $this->finishedAt = $finishedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInterruptedAt() : ?string
    {
        return $this->interruptedAt;
    }
    /**
     * 
     *
     * @param string|null $interruptedAt
     *
     * @return self
     */
    public function setInterruptedAt(?string $interruptedAt) : self
    {
        $this->interruptedAt = $interruptedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getResumedAt() : ?string
    {
        return $this->resumedAt;
    }
    /**
     * 
     *
     * @param string|null $resumedAt
     *
     * @return self
     */
    public function setResumedAt(?string $resumedAt) : self
    {
        $this->resumedAt = $resumedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdatedAt() : ?string
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTerminatedAt() : ?string
    {
        return $this->terminatedAt;
    }
    /**
     * 
     *
     * @param string|null $terminatedAt
     *
     * @return self
     */
    public function setTerminatedAt(?string $terminatedAt) : self
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