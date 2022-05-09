<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class Schedule
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type = 'once';
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
     * @var int|null
     */
    protected $recurrences;
    /**
     * @var string[]
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
     * @var string
     */
    protected $owner;
    /**
     * @var string
     */
    protected $project;
    /**
     * @var string
     */
    protected $organization;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getStartAt(): ?\DateTime
    {
        return $this->startAt;
    }

    public function setStartAt(?\DateTime $startAt): self
    {
        $this->startAt = $startAt;

        return $this;
    }

    public function getInterval(): ?string
    {
        return $this->interval;
    }

    public function setInterval(?string $interval): self
    {
        $this->interval = $interval;

        return $this;
    }

    public function getEndAt(): ?\DateTime
    {
        return $this->endAt;
    }

    public function setEndAt(?\DateTime $endAt): self
    {
        $this->endAt = $endAt;

        return $this;
    }

    public function getRecurrences(): ?int
    {
        return $this->recurrences;
    }

    public function setRecurrences(?int $recurrences): self
    {
        $this->recurrences = $recurrences;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getExecutions(): array
    {
        return $this->executions;
    }

    /**
     * @param string[] $executions
     */
    public function setExecutions(array $executions): self
    {
        $this->executions = $executions;

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

    public function getOwner(): string
    {
        return $this->owner;
    }

    public function setOwner(string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getProject(): string
    {
        return $this->project;
    }

    public function setProject(string $project): self
    {
        $this->project = $project;

        return $this;
    }

    public function getOrganization(): string
    {
        return $this->organization;
    }

    public function setOrganization(string $organization): self
    {
        $this->organization = $organization;

        return $this;
    }
}
