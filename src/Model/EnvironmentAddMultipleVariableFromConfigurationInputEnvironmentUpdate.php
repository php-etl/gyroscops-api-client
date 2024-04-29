<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class EnvironmentAddMultipleVariableFromConfigurationInputEnvironmentUpdate extends \ArrayObject
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
     * @var VariableFromConfigurationInputEnvironmentUpdate[]|null
     */
    protected $variables;

    /**
     * @return VariableFromConfigurationInputEnvironmentUpdate[]|null
     */
    public function getVariables(): ?array
    {
        return $this->variables;
    }

    /**
     * @param VariableFromConfigurationInputEnvironmentUpdate[]|null $variables
     */
    public function setVariables(?array $variables): self
    {
        $this->initialized['variables'] = true;
        $this->variables = $variables;

        return $this;
    }
}
