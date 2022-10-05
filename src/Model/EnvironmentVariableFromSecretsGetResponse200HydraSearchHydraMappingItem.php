<?php

namespace Gyroscops\Api\Model;

class EnvironmentVariableFromSecretsGetResponse200HydraSearchHydraMappingItem
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $variable;
    /**
     * @var string|null
     */
    protected $property;
    /**
     * @var bool
     */
    protected $required;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getVariable(): string
    {
        return $this->variable;
    }

    public function setVariable(string $variable): self
    {
        $this->variable = $variable;

        return $this;
    }

    public function getProperty(): ?string
    {
        return $this->property;
    }

    public function setProperty(?string $property): self
    {
        $this->property = $property;

        return $this;
    }

    public function getRequired(): bool
    {
        return $this->required;
    }

    public function setRequired(bool $required): self
    {
        $this->required = $required;

        return $this;
    }
}
