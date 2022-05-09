<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class Organization
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string[]
     */
    protected $authorizations;
    /**
     * @var string
     */
    protected $name;
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
    protected $projects;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

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
    public function getProjects(): array
    {
        return $this->projects;
    }

    /**
     * @param string[] $projects
     */
    public function setProjects(array $projects): self
    {
        $this->projects = $projects;

        return $this;
    }
}
