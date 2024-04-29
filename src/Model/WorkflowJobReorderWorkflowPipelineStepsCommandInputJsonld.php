<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class WorkflowJobReorderWorkflowPipelineStepsCommandInputJsonld extends \ArrayObject
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
     * @var string[]|null
     */
    protected $codes;

    public function getContext()
    {
        return $this->context;
    }

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

    /**
     * @return string[]|null
     */
    public function getCodes(): ?array
    {
        return $this->codes;
    }

    /**
     * @param string[]|null $codes
     */
    public function setCodes(?array $codes): self
    {
        $this->initialized['codes'] = true;
        $this->codes = $codes;

        return $this;
    }
}
