<?php

namespace Gyroscops\Api\Model;

class SecretSecretInput
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string[]|null
     */
    protected $contents;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getContents(): ?iterable
    {
        return $this->contents;
    }

    /**
     * @param string[]|null $contents
     */
    public function setContents(?iterable $contents): self
    {
        $this->contents = $contents;

        return $this;
    }
}
