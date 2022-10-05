<?php

namespace Gyroscops\Api\Model;

class ConfigMapJsonld
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var mixed
     */
    protected $context;
    /**
     * @var string
     */
    protected $id2;
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
     * @var TraversableJsonld
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

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
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
        $this->context = $context;

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

    public function getIterator(): TraversableJsonld
    {
        return $this->iterator;
    }

    public function setIterator(TraversableJsonld $iterator): self
    {
        $this->iterator = $iterator;

        return $this;
    }
}
