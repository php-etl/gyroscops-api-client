<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ExecutionExecutionRead extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $owner;
    /**
     * @var string|null
     */
    protected $workspace;
    /**
     * @var string|null
     */
    protected $organization;
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
     * @var int|null
     */
    protected $currentVersion;
    /**
     * @var string|null
     */
    protected $pipeline;
    /**
     * @var string|null
     */
    protected $workflow;
    /**
     * @var string|null
     */
    protected $action;
    /**
     * @var string|null
     */
    protected $schedule;
    /**
     * @var string|null
     */
    protected $environment;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;

        return $this;
    }

    public function getWorkspace(): ?string
    {
        return $this->workspace;
    }

    public function setWorkspace(?string $workspace): self
    {
        $this->initialized['workspace'] = true;
        $this->workspace = $workspace;

        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(?string $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getErrors(): ?int
    {
        return $this->errors;
    }

    public function setErrors(?int $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }

    public function getScheduledAt(): ?\DateTime
    {
        return $this->scheduledAt;
    }

    public function setScheduledAt(?\DateTime $scheduledAt): self
    {
        $this->initialized['scheduledAt'] = true;
        $this->scheduledAt = $scheduledAt;

        return $this;
    }

    public function getStartedAt(): ?\DateTime
    {
        return $this->startedAt;
    }

    public function setStartedAt(?\DateTime $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;

        return $this;
    }

    public function getFinishedAt(): ?\DateTime
    {
        return $this->finishedAt;
    }

    public function setFinishedAt(?\DateTime $finishedAt): self
    {
        $this->initialized['finishedAt'] = true;
        $this->finishedAt = $finishedAt;

        return $this;
    }

    public function getInterruptedAt(): ?\DateTime
    {
        return $this->interruptedAt;
    }

    public function setInterruptedAt(?\DateTime $interruptedAt): self
    {
        $this->initialized['interruptedAt'] = true;
        $this->interruptedAt = $interruptedAt;

        return $this;
    }

    public function getResumedAt(): ?\DateTime
    {
        return $this->resumedAt;
    }

    public function setResumedAt(?\DateTime $resumedAt): self
    {
        $this->initialized['resumedAt'] = true;
        $this->resumedAt = $resumedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getTerminatedAt(): ?\DateTime
    {
        return $this->terminatedAt;
    }

    public function setTerminatedAt(?\DateTime $terminatedAt): self
    {
        $this->initialized['terminatedAt'] = true;
        $this->terminatedAt = $terminatedAt;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }

    public function getCurrentVersion(): ?int
    {
        return $this->currentVersion;
    }

    public function setCurrentVersion(?int $currentVersion): self
    {
        $this->initialized['currentVersion'] = true;
        $this->currentVersion = $currentVersion;

        return $this;
    }

    public function getPipeline(): ?string
    {
        return $this->pipeline;
    }

    public function setPipeline(?string $pipeline): self
    {
        $this->initialized['pipeline'] = true;
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getWorkflow(): ?string
    {
        return $this->workflow;
    }

    public function setWorkflow(?string $workflow): self
    {
        $this->initialized['workflow'] = true;
        $this->workflow = $workflow;

        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;

        return $this;
    }

    public function getSchedule(): ?string
    {
        return $this->schedule;
    }

    public function setSchedule(?string $schedule): self
    {
        $this->initialized['schedule'] = true;
        $this->schedule = $schedule;

        return $this;
    }

    public function getEnvironment(): ?string
    {
        return $this->environment;
    }

    public function setEnvironment(?string $environment): self
    {
        $this->initialized['environment'] = true;
        $this->environment = $environment;

        return $this;
    }
}
