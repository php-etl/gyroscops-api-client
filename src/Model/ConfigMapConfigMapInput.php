<?php

namespace Gyroscops\Api\Model;

class ConfigMapConfigMapInput
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
     * @var ConfigMapValueInput|null
     */
    protected $configs;

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

    public function getConfigs(): ?ConfigMapValueInput
    {
        return $this->configs;
    }

    public function setConfigs(?ConfigMapValueInput $configs): self
    {
        $this->configs = $configs;

        return $this;
    }
}
