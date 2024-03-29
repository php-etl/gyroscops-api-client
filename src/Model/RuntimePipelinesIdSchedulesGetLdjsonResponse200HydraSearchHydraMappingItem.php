<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class RuntimePipelinesIdSchedulesGetLdjsonResponse200HydraSearchHydraMappingItem extends \ArrayObject
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
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $variable;
    /**
     * @var string|null
     */
    protected $property;
    /**
     * @var bool|null
     */
    protected $required;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getVariable(): ?string
    {
        return $this->variable;
    }

    public function setVariable(?string $variable): self
    {
        $this->initialized['variable'] = true;
        $this->variable = $variable;

        return $this;
    }

    public function getProperty(): ?string
    {
        return $this->property;
    }

    public function setProperty(?string $property): self
    {
        $this->initialized['property'] = true;
        $this->property = $property;

        return $this;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(?bool $required): self
    {
        $this->initialized['required'] = true;
        $this->required = $required;

        return $this;
    }
}
