<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class Step extends \ArrayObject
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
     * @var string[]|null
     */
    protected $configuration;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $label;
    /**
     * @var Probe[]|null
     */
    protected $probes;

    /**
     * @return string[]|null
     */
    public function getConfiguration(): ?iterable
    {
        return $this->configuration;
    }

    /**
     * @param string[]|null $configuration
     */
    public function setConfiguration(?iterable $configuration): self
    {
        $this->initialized['configuration'] = true;
        $this->configuration = $configuration;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    /**
     * @return Probe[]|null
     */
    public function getProbes(): ?array
    {
        return $this->probes;
    }

    /**
     * @param Probe[]|null $probes
     */
    public function setProbes(?array $probes): self
    {
        $this->initialized['probes'] = true;
        $this->probes = $probes;

        return $this;
    }
}