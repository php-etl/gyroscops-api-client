<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class VariableFromConfigurationVariableViewEnvironmentView extends \ArrayObject
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
     * @var string|null
     */
    protected $configuration;
    /**
     * @var string|null
     */
    protected $item;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var EnvironmentVariableViewEnvironmentView|null
     */
    protected $environment;
    /**
     * @var string|null
     */
    protected $name;

    public function getConfiguration(): ?string
    {
        return $this->configuration;
    }

    public function setConfiguration(?string $configuration): self
    {
        $this->initialized['configuration'] = true;
        $this->configuration = $configuration;

        return $this;
    }

    public function getItem(): ?string
    {
        return $this->item;
    }

    public function setItem(?string $item): self
    {
        $this->initialized['item'] = true;
        $this->item = $item;

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

    public function getEnvironment(): ?EnvironmentVariableViewEnvironmentView
    {
        return $this->environment;
    }

    public function setEnvironment(?EnvironmentVariableViewEnvironmentView $environment): self
    {
        $this->initialized['environment'] = true;
        $this->environment = $environment;

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
}
