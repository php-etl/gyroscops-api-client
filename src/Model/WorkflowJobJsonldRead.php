<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class WorkflowJobJsonldRead extends \ArrayObject
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
     * @var WorkflowJsonldRead|null
     */
    protected $workflow;
    /**
     * @var WorkflowJobPipelineJsonldRead|null
     */
    protected $pipeline;
    /**
     * @var WorkflowJobActionJsonldRead|null
     */
    protected $action;

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

    public function getWorkflow(): ?WorkflowJsonldRead
    {
        return $this->workflow;
    }

    public function setWorkflow(?WorkflowJsonldRead $workflow): self
    {
        $this->initialized['workflow'] = true;
        $this->workflow = $workflow;

        return $this;
    }

    public function getPipeline(): ?WorkflowJobPipelineJsonldRead
    {
        return $this->pipeline;
    }

    public function setPipeline(?WorkflowJobPipelineJsonldRead $pipeline): self
    {
        $this->initialized['pipeline'] = true;
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getAction(): ?WorkflowJobActionJsonldRead
    {
        return $this->action;
    }

    public function setAction(?WorkflowJobActionJsonldRead $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;

        return $this;
    }
}
