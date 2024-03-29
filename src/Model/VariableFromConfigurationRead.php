<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class VariableFromConfigurationRead extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var ConfigurationRead|null
     */
    protected $configuration;
    /**
     * @var string|null
     */
    protected $item;
    /**
     * @var EnvironmentRead|null
     */
    protected $environment;
    /**
     * @var string|null
     */
    protected $name;

    public function getConfiguration(): ?ConfigurationRead
    {
        return $this->configuration;
    }

    public function setConfiguration(?ConfigurationRead $configuration): self
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

    public function getEnvironment(): ?EnvironmentRead
    {
        return $this->environment;
    }

    public function setEnvironment(?EnvironmentRead $environment): self
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
