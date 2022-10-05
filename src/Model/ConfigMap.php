<?php

namespace Gyroscops\Api\Model;

class ConfigMap
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
     * @var mixed
     */
    protected $iterator;

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
     * @return mixed
     */
    public function getIterator()
    {
        return $this->iterator;
    }

    /**
     * @param mixed $iterator
     */
    public function setIterator($iterator): self
    {
        $this->iterator = $iterator;

        return $this;
    }
}
