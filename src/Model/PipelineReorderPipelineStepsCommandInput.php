<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class PipelineReorderPipelineStepsCommandInput
{
    /**
     * @var string|null
     */
    protected $pipeline;
    /**
     * @var string[]|null
     */
    protected $codes;

    public function getPipeline(): ?string
    {
        return $this->pipeline;
    }

    public function setPipeline(?string $pipeline): self
    {
        $this->pipeline = $pipeline;

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
        $this->codes = $codes;

        return $this;
    }
}
