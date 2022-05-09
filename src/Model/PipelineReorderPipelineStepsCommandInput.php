<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class PipelineReorderPipelineStepsCommandInput
{
    /**
     * @var string
     */
    protected $pipeline;
    /**
     * @var string[]
     */
    protected $codes;

    public function getPipeline(): string
    {
        return $this->pipeline;
    }

    public function setPipeline(string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getCodes(): array
    {
        return $this->codes;
    }

    /**
     * @param string[] $codes
     */
    public function setCodes(array $codes): self
    {
        $this->codes = $codes;

        return $this;
    }
}
