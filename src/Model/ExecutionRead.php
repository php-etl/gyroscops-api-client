<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ExecutionRead
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $status = 'unknown';
    /**
     * @var int|null
     */
    protected $errors;
    /**
     * @var \DateTime|null
     */
    protected $scheduledAt;
    /**
     * @var \DateTime|null
     */
    protected $startedAt;
    /**
     * @var \DateTime|null
     */
    protected $finishedAt;
    /**
     * @var \DateTime|null
     */
    protected $interruptedAt;
    /**
     * @var \DateTime|null
     */
    protected $resumedAt;
    /**
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * @var \DateTime|null
     */
    protected $terminatedAt;
    /**
     * @var string|null
     */
    protected $reason;
    /**
     * @var string|null
     */
    protected $pipeline;
    /**
     * @var string|null
     */
    protected $workflow;
    /**
     * @var mixed|null
     */
    protected $action;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getErrors(): ?int
    {
        return $this->errors;
    }

    public function setErrors(?int $errors): self
    {
        $this->errors = $errors;

        return $this;
    }

    public function getScheduledAt(): ?\DateTime
    {
        return $this->scheduledAt;
    }

    public function setScheduledAt(?\DateTime $scheduledAt): self
    {
        $this->scheduledAt = $scheduledAt;

        return $this;
    }

    public function getStartedAt(): ?\DateTime
    {
        return $this->startedAt;
    }

    public function setStartedAt(?\DateTime $startedAt): self
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    public function getFinishedAt(): ?\DateTime
    {
        return $this->finishedAt;
    }

    public function setFinishedAt(?\DateTime $finishedAt): self
    {
        $this->finishedAt = $finishedAt;

        return $this;
    }

    public function getInterruptedAt(): ?\DateTime
    {
        return $this->interruptedAt;
    }

    public function setInterruptedAt(?\DateTime $interruptedAt): self
    {
        $this->interruptedAt = $interruptedAt;

        return $this;
    }

    public function getResumedAt(): ?\DateTime
    {
        return $this->resumedAt;
    }

    public function setResumedAt(?\DateTime $resumedAt): self
    {
        $this->resumedAt = $resumedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getTerminatedAt(): ?\DateTime
    {
        return $this->terminatedAt;
    }

    public function setTerminatedAt(?\DateTime $terminatedAt): self
    {
        $this->terminatedAt = $terminatedAt;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getPipeline(): ?string
    {
        return $this->pipeline;
    }

    public function setPipeline(?string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getWorkflow(): ?string
    {
        return $this->workflow;
    }

    public function setWorkflow(?string $workflow): self
    {
        $this->workflow = $workflow;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action): self
    {
        $this->action = $action;

        return $this;
    }
}
