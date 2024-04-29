<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class WorkflowJobMoveBeforeWorkflowPipelineStepCommandInput extends \ArrayObject
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
    protected $before;
    /**
     * @var string|null
     */
    protected $code;

    public function getBefore(): ?string
    {
        return $this->before;
    }

    public function setBefore(?string $before): self
    {
        $this->initialized['before'] = true;
        $this->before = $before;

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
