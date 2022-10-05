<?php

namespace Gyroscops\Api\Model;

class Environment
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $organization;
    /**
     * @var string
     */
    protected $workspace;
    /**
     * @var Variable[]
     */
    protected $variables;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getWorkspace(): string
    {
        return $this->workspace;
    }

    public function setWorkspace(string $workspace): self
    {
        $this->workspace = $workspace;

        return $this;
    }

    /**
     * @return Variable[]
     */
    public function getVariables(): array
    {
        return $this->variables;
    }

    /**
     * @param Variable[] $variables
     */
    public function setVariables(array $variables): self
    {
        $this->variables = $variables;

        return $this;
    }
}
