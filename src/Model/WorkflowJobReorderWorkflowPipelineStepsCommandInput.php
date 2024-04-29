<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class WorkflowJobReorderWorkflowPipelineStepsCommandInput extends \ArrayObject
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
     * @var string[]|null
     */
    protected $codes;

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
