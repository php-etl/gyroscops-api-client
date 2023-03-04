<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class ConfigurationRemoveConfigurationValueInputJsonld
{
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
     * @var mixed|null
     */
    protected $id2;
    /**
     * @var string[]|null
     */
    protected $contents;
    /**
     * @var mixed|null
     */
    protected $organization;
    /**
     * @var mixed|null
     */
    protected $workspace;
    /**
     * @var TraversableJsonld|null
     */
    protected $iterator;

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    public function setContext(mixed $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId2()
    {
        return $this->id2;
    }

    public function setId2(mixed $id2): self
    {
        $this->id2 = $id2;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getContents(): ?array
    {
        return $this->contents;
    }

    /**
     * @param string[]|null $contents
     */
    public function setContents(?array $contents): self
    {
        $this->contents = $contents;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    public function setOrganization(mixed $organization): self
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorkspace()
    {
        return $this->workspace;
    }

    public function setWorkspace(mixed $workspace): self
    {
        $this->workspace = $workspace;

        return $this;
    }

    public function getIterator(): ?TraversableJsonld
    {
        return $this->iterator;
    }

    public function setIterator(?TraversableJsonld $iterator): self
    {
        $this->iterator = $iterator;

        return $this;
    }
}
