<?php

namespace Gyroscops\Api\Model;

class UserAuthorization
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $user;
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
    protected $resource;
    /**
     * @var string[]|null
     */
    protected $authorizations;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
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

    public function getWorkspace(): ?string
    {
        return $this->workspace;
    }

    public function setWorkspace(?string $workspace): self
    {
        $this->workspace = $workspace;

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

    public function getResource(): ?string
    {
        return $this->resource;
    }

    public function setResource(?string $resource): self
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAuthorizations(): ?array
    {
        return $this->authorizations;
    }

    /**
     * @param string[]|null $authorizations
     */
    public function setAuthorizations(?array $authorizations): self
    {
        $this->authorizations = $authorizations;

        return $this;
    }
}
