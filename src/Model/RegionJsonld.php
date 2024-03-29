<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class RegionJsonld extends \ArrayObject
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
     * @var mixed|null
     */
    protected $context;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $id2;
    /**
     * @var string|null
     */
    protected $provider;
    /**
     * @var string|null
     */
    protected $datacenterName;
    /**
     * @var string|null
     */
    protected $datacenterAddress;
    /**
     * @var AbstractCloudEngineJsonld|null
     */
    protected $cloudEngine;
    /**
     * @var string[]|null
     */
    protected $workspaces;

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param mixed $context
     */
    public function setContext($context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;

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

    public function getId2(): ?string
    {
        return $this->id2;
    }

    public function setId2(?string $id2): self
    {
        $this->initialized['id2'] = true;
        $this->id2 = $id2;

        return $this;
    }

    public function getProvider(): ?string
    {
        return $this->provider;
    }

    public function setProvider(?string $provider): self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;

        return $this;
    }

    public function getDatacenterName(): ?string
    {
        return $this->datacenterName;
    }

    public function setDatacenterName(?string $datacenterName): self
    {
        $this->initialized['datacenterName'] = true;
        $this->datacenterName = $datacenterName;

        return $this;
    }

    public function getDatacenterAddress(): ?string
    {
        return $this->datacenterAddress;
    }

    public function setDatacenterAddress(?string $datacenterAddress): self
    {
        $this->initialized['datacenterAddress'] = true;
        $this->datacenterAddress = $datacenterAddress;

        return $this;
    }

    public function getCloudEngine(): ?AbstractCloudEngineJsonld
    {
        return $this->cloudEngine;
    }

    public function setCloudEngine(?AbstractCloudEngineJsonld $cloudEngine): self
    {
        $this->initialized['cloudEngine'] = true;
        $this->cloudEngine = $cloudEngine;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getWorkspaces(): ?array
    {
        return $this->workspaces;
    }

    /**
     * @param string[]|null $workspaces
     */
    public function setWorkspaces(?array $workspaces): self
    {
        $this->initialized['workspaces'] = true;
        $this->workspaces = $workspaces;

        return $this;
    }
}
