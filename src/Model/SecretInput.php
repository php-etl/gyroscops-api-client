<?php

namespace Gyroscops\Api\Model;

class SecretInput
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string[]
     */
    protected $contents;

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

    /**
     * @return string[]
     */
    public function getContents(): iterable
    {
        return $this->contents;
    }

    /**
     * @param string[] $contents
     */
    public function setContents(iterable $contents): self
    {
        $this->contents = $contents;

        return $this;
    }
}
