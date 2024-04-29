<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ScheduleJsonldScheduleRead extends \ArrayObject
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
    protected $type;
    /**
     * @var mixed|null
     */
    protected $context;
    /**
     * @var string|null
     */
    protected $id2;
    /**
     * @var ScheduleTypeJsonldScheduleRead|null
     */
    protected $type2;
    /**
     * @var \DateTime|null
     */
    protected $startAt;
    /**
     * @var string|null
     */
    protected $interval;
    /**
     * @var \DateTime|null
     */
    protected $endAt;
    /**
     * @var string|null
     */
    protected $crontab;
    /**
     * @var int|null
     */
    protected $recurrences;
    /**
     * @var int|null
     */
    protected $currentVersion;
    /**
     * @var string[]|null
     */
    protected $executions;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getContext()
    {
        return $this->context;
    }

    public function setContext($context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;

        return $this;
    }

    public function getId2(): ?string
    {
        return $this->id2;
    }

    public function setId2(?string $id2): self
    {
        $this->initialized['id2'] = true;
        $this->id2 = $id2;

        return $this;
    }

    public function getType2(): ?ScheduleTypeJsonldScheduleRead
    {
        return $this->type2;
    }

    public function setType2(?ScheduleTypeJsonldScheduleRead $type2): self
    {
        $this->initialized['type2'] = true;
        $this->type2 = $type2;

        return $this;
    }

    public function getStartAt(): ?\DateTime
    {
        return $this->startAt;
    }

    public function setStartAt(?\DateTime $startAt): self
    {
        $this->initialized['startAt'] = true;
        $this->startAt = $startAt;

        return $this;
    }

    public function getInterval(): ?string
    {
        return $this->interval;
    }

    public function setInterval(?string $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;

        return $this;
    }

    public function getEndAt(): ?\DateTime
    {
        return $this->endAt;
    }

    public function setEndAt(?\DateTime $endAt): self
    {
        $this->initialized['endAt'] = true;
        $this->endAt = $endAt;

        return $this;
    }

    public function getCrontab(): ?string
    {
        return $this->crontab;
    }

    public function setCrontab(?string $crontab): self
    {
        $this->initialized['crontab'] = true;
        $this->crontab = $crontab;

        return $this;
    }

    public function getRecurrences(): ?int
    {
        return $this->recurrences;
    }

    public function setRecurrences(?int $recurrences): self
    {
        $this->initialized['recurrences'] = true;
        $this->recurrences = $recurrences;

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

    /**
     * @return string[]|null
     */
    public function getExecutions(): ?array
    {
        return $this->executions;
    }

    /**
     * @param string[]|null $executions
     */
    public function setExecutions(?array $executions): self
    {
        $this->initialized['executions'] = true;
        $this->executions = $executions;

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
