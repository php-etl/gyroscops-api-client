<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class WorkspaceJsonldWorkspaceRead extends \ArrayObject
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
     * @var mixed|null
     */
    protected $context;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $id2;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $slug;
    /**
     * @var string|null
     */
    protected $organization;
    /**
     * @var string[]|null
     */
    protected $authorizations;
    /**
     * @var string[]|null
     */
    protected $users;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

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
        $this->initialized['authorizations'] = true;
        $this->authorizations = $authorizations;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * @param string[]|null $users
     */
    public function setUsers(?array $users): self
    {
        $this->initialized['users'] = true;
        $this->users = $users;

        return $this;
    }
}
