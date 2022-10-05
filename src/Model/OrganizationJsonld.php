<?php

namespace Gyroscops\Api\Model;

class OrganizationJsonld
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
     * @var string[]
     */
    protected $authorizations;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $slug;
    /**
     * @var string[]
     */
    protected $users;
    /**
     * @var string[]
     */
    protected $externalCollaborators;
    /**
     * @var string[]
     */
    protected $workspaces;

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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param string[] $users
     */
    public function setUsers(array $users): self
    {
        $this->users = $users;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getExternalCollaborators(): array
    {
        return $this->externalCollaborators;
    }

    /**
     * @param string[] $externalCollaborators
     */
    public function setExternalCollaborators(array $externalCollaborators): self
    {
        $this->externalCollaborators = $externalCollaborators;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getWorkspaces(): array
    {
        return $this->workspaces;
    }

    /**
     * @param string[] $workspaces
     */
    public function setWorkspaces(array $workspaces): self
    {
        $this->workspaces = $workspaces;

        return $this;
    }
}
