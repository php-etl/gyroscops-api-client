<?php

namespace Gyroscops\Api\Model;

class PipelineCompilePipelineCommandInput
{
    /**
     * @var string
     */
    protected $pipeline;

    public function getPipeline(): string
    {
        return $this->pipeline;
    }

    public function setPipeline(string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }
}
