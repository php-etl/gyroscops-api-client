<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class PipelineCompilation
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $pipeline;
    /**
     * @var string|null
     */
    protected $project;
    /**
     * @var string|null
     */
    protected $organization;
    /**
     * @var string
     */
    protected $owner;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getPipeline(): string
    {
        return $this->pipeline;
    }

    public function setPipeline(string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getProject(): ?string
    {
        return $this->project;
    }

    public function setProject(?string $project): self
    {
        $this->project = $project;

        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;

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
}
