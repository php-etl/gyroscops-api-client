<?php

namespace Gyroscops\Api\Model;

class Variable
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $environment;
    /**
     * @var string|null
     */
    protected $name;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getEnvironment(): ?string
    {
        return $this->environment;
    }

    public function setEnvironment(?string $environment): self
    {
        $this->environment = $environment;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
