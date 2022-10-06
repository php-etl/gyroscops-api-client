<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class VariableFromConfigMap
{
    /**
     * @var string|null
     */
    protected $configMap;
    /**
     * @var string|null
     */
    protected $item;
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

    public function getConfigMap(): ?string
    {
        return $this->configMap;
    }

    public function setConfigMap(?string $configMap): self
    {
        $this->configMap = $configMap;

        return $this;
    }

    public function getItem(): ?string
    {
        return $this->item;
    }

    public function setItem(?string $item): self
    {
        $this->item = $item;

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
