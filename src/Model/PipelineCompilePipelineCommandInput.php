<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class PipelineCompilePipelineCommandInput
{
    /**
     * @var string|null
     */
    protected $pipeline;

    public function getPipeline(): ?string
    {
        return $this->pipeline;
    }

    public function setPipeline(?string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }
}
