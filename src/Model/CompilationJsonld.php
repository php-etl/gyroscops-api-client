<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class CompilationJsonld extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
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
    protected $owner;

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

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param mixed $context
     */
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
}
