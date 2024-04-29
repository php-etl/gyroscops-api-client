<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class CompilationCompilationRead extends \ArrayObject
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
     * @var int|null
     */
    protected $currentVersion;
    /**
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * @var string|null
     */
    protected $workflow;
    /**
     * @var string|null
     */
    protected $pipeline;

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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

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
}
