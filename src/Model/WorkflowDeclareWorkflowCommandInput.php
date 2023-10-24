<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class WorkflowDeclareWorkflowCommandInput extends \ArrayObject
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
     * @var Job[]|null
     */
    protected $jobs;
    /**
     * @var Composer|null
     */
    protected $composer;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $label;

    /**
     * @return Job[]|null
     */
    public function getJobs(): ?array
    {
        return $this->jobs;
    }

    /**
     * @param Job[]|null $jobs
     */
    public function setJobs(?array $jobs): self
    {
        $this->initialized['jobs'] = true;
        $this->jobs = $jobs;

        return $this;
    }

    public function getComposer(): ?Composer
    {
        return $this->composer;
    }

    public function setComposer(?Composer $composer): self
    {
        $this->initialized['composer'] = true;
        $this->composer = $composer;

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
}