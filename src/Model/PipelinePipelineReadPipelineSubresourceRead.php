<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class PipelinePipelineReadPipelineSubresourceRead extends \ArrayObject
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
     * @var int|null
     */
    protected $currentVersion;
    /**
     * @var bool|null
     */
    protected $isSoftDeleted;
    /**
     * @var \DateTime|null
     */
    protected $compiledAt;
    /**
     * @var string[]|null
     */
    protected $autoload;
    /**
     * @var string[]|null
     */
    protected $packages;
    /**
     * @var string[]|null
     */
    protected $repositories;
    /**
     * @var string[]|null
     */
    protected $auths;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $label;
    /**
     * @var string[]|null
     */
    protected $steps;

    public function getCurrentVersion(): ?int
    {
        return $this->currentVersion;
    }

    public function setCurrentVersion(?int $currentVersion): self
    {
        $this->initialized['currentVersion'] = true;
        $this->currentVersion = $currentVersion;

        return $this;
    }

    public function getIsSoftDeleted(): ?bool
    {
        return $this->isSoftDeleted;
    }

    public function setIsSoftDeleted(?bool $isSoftDeleted): self
    {
        $this->initialized['isSoftDeleted'] = true;
        $this->isSoftDeleted = $isSoftDeleted;

        return $this;
    }

    public function getCompiledAt(): ?\DateTime
    {
        return $this->compiledAt;
    }

    public function setCompiledAt(?\DateTime $compiledAt): self
    {
        $this->initialized['compiledAt'] = true;
        $this->compiledAt = $compiledAt;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAutoload(): ?array
    {
        return $this->autoload;
    }

    /**
     * @param string[]|null $autoload
     */
    public function setAutoload(?array $autoload): self
    {
        $this->initialized['autoload'] = true;
        $this->autoload = $autoload;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPackages(): ?array
    {
        return $this->packages;
    }

    /**
     * @param string[]|null $packages
     */
    public function setPackages(?array $packages): self
    {
        $this->initialized['packages'] = true;
        $this->packages = $packages;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getRepositories(): ?array
    {
        return $this->repositories;
    }

    /**
     * @param string[]|null $repositories
     */
    public function setRepositories(?array $repositories): self
    {
        $this->initialized['repositories'] = true;
        $this->repositories = $repositories;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAuths(): ?array
    {
        return $this->auths;
    }

    /**
     * @param string[]|null $auths
     */
    public function setAuths(?array $auths): self
    {
        $this->initialized['auths'] = true;
        $this->auths = $auths;

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
     * @return string[]|null
     */
    public function getSteps(): ?array
    {
        return $this->steps;
    }

    /**
     * @param string[]|null $steps
     */
    public function setSteps(?array $steps): self
    {
        $this->initialized['steps'] = true;
        $this->steps = $steps;

        return $this;
    }
}
