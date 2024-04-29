<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class WorkflowJobMoveAfterWorkflowPipelineStepCommandInput extends \ArrayObject
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
     * @var string|null
     */
    protected $after;
    /**
     * @var string|null
     */
    protected $code;

    public function getAfter(): ?string
    {
        return $this->after;
    }

    public function setAfter(?string $after): self
    {
        $this->initialized['after'] = true;
        $this->after = $after;

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
}
