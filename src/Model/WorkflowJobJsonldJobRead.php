<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class WorkflowJobJsonldJobRead extends \ArrayObject
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
     * @var string|null
     */
    protected $workflow;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var int|null
     */
    protected $order;
    /**
     * @var WorkflowJobPipelineJsonldJobRead|null
     */
    protected $pipeline;
    /**
     * @var WorkflowJobActionJsonldJobRead|null
     */
    protected $action;

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

    public function getWorkflow(): ?string
    {
        return $this->workflow;
    }

    public function setWorkflow(?string $workflow): self
    {
        $this->initialized['workflow'] = true;
        $this->workflow = $workflow;

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

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    public function getPipeline(): ?WorkflowJobPipelineJsonldJobRead
    {
        return $this->pipeline;
    }

    public function setPipeline(?WorkflowJobPipelineJsonldJobRead $pipeline): self
    {
        $this->initialized['pipeline'] = true;
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getAction(): ?WorkflowJobActionJsonldJobRead
    {
        return $this->action;
    }

    public function setAction(?WorkflowJobActionJsonldJobRead $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;

        return $this;
    }
}
