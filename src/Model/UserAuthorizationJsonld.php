<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class UserAuthorizationJsonld
{
    /**
     * @var mixed
     */
    protected $context;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $id2;
    /**
     * @var string|null
     */
    protected $user;
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
    protected $resource;
    /**
     * @var string[]
     */
    protected $authorizations;

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
        $this->context = $context;

        return $this;
    }

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

    public function getId2(): string
    {
        return $this->id2;
    }

    public function setId2(string $id2): self
    {
        $this->id2 = $id2;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;

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

    public function getResource(): string
    {
        return $this->resource;
    }

    public function setResource(string $resource): self
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAuthorizations(): array
    {
        return $this->authorizations;
    }

    /**
     * @param string[] $authorizations
     */
    public function setAuthorizations(array $authorizations): self
    {
        $this->authorizations = $authorizations;

        return $this;
    }
}
