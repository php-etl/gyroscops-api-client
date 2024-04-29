<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class EnvironmentAddMultipleVariableFromConstantInputEnvironmentUpdate extends \ArrayObject
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
     * @var VariableFromConstantInputEnvironmentUpdate[]|null
     */
    protected $variables;

    /**
     * @return VariableFromConstantInputEnvironmentUpdate[]|null
     */
    public function getVariables(): ?array
    {
        return $this->variables;
    }

    /**
     * @param VariableFromConstantInputEnvironmentUpdate[]|null $variables
     */
    public function setVariables(?array $variables): self
    {
        $this->initialized['variables'] = true;
        $this->variables = $variables;

        return $this;
    }
}
