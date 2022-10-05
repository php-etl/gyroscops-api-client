<?php

namespace Gyroscops\Api\Model;

class PipelineDeclarePipelineCommandInput
{
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $workspace;
    /**
     * @var string|null
     */
    protected $organization;
    /**
     * @var StepInput[]
     */
    protected $steps;
    /**
     * @var AutoloadInput[]
     */
    protected $autoloads;

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getWorkspace(): string
    {
        return $this->workspace;
    }

    public function setWorkspace(string $workspace): self
    {
        $this->workspace = $workspace;

        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * @return StepInput[]
     */
    public function getSteps(): array
    {
        return $this->steps;
    }

    /**
     * @param StepInput[] $steps
     */
    public function setSteps(array $steps): self
    {
        $this->steps = $steps;

        return $this;
    }

    /**
     * @return AutoloadInput[]
     */
    public function getAutoloads(): array
    {
        return $this->autoloads;
    }

    /**
     * @param AutoloadInput[] $autoloads
     */
    public function setAutoloads(array $autoloads): self
    {
        $this->autoloads = $autoloads;

        return $this;
    }
}
