<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class UserAuthorization
{
    /**
     * @var string
     */
    protected $id;
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

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

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
