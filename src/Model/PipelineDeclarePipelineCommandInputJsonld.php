<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class PipelineDeclarePipelineCommandInputJsonld
{
    /**
     * @var mixed
     */
    protected $context;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
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
    protected $project;
    /**
     * @var string|null
     */
    protected $organization;
    /**
     * @var StepInputJsonld[]
     */
    protected $steps;
    /**
     * @var AutoloadInputJsonld[]
     */
    protected $autoloads;

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
        $this->context = $context;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

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

    public function getProject(): string
    {
        return $this->project;
    }

    public function setProject(string $project): self
    {
        $this->project = $project;

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
     * @return StepInputJsonld[]
     */
    public function getSteps(): array
    {
        return $this->steps;
    }

    /**
     * @param StepInputJsonld[] $steps
     */
    public function setSteps(array $steps): self
    {
        $this->steps = $steps;

        return $this;
    }

    /**
     * @return AutoloadInputJsonld[]
     */
    public function getAutoloads(): array
    {
        return $this->autoloads;
    }

    /**
     * @param AutoloadInputJsonld[] $autoloads
     */
    public function setAutoloads(array $autoloads): self
    {
        $this->autoloads = $autoloads;

        return $this;
    }
}
