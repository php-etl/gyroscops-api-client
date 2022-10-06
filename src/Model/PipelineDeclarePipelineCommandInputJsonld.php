<?php

namespace Gyroscops\Api\Model;

class PipelineDeclarePipelineCommandInputJsonld
{
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
    protected $label;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $workspace;
    /**
     * @var string|null
     */
    protected $organization;
    /**
     * @var StepInputJsonld[]|null
     */
    protected $steps;
    /**
     * @var AutoloadInputJsonld[]|null
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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getWorkspace(): ?string
    {
        return $this->workspace;
    }

    public function setWorkspace(?string $workspace): self
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
     * @return StepInputJsonld[]|null
     */
    public function getSteps(): ?array
    {
        return $this->steps;
    }

    /**
     * @param StepInputJsonld[]|null $steps
     */
    public function setSteps(?array $steps): self
    {
        $this->steps = $steps;

        return $this;
    }

    /**
     * @return AutoloadInputJsonld[]|null
     */
    public function getAutoloads(): ?array
    {
        return $this->autoloads;
    }

    /**
     * @param AutoloadInputJsonld[]|null $autoloads
     */
    public function setAutoloads(?array $autoloads): self
    {
        $this->autoloads = $autoloads;

        return $this;
    }
}
