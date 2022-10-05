<?php

namespace Gyroscops\Api\Model;

class PipelineMoveAfterPipelineStepCommandInput
{
    /**
     * @var string
     */
    protected $pipeline;
    /**
     * @var string
     */
    protected $previous;
    /**
     * @var string
     */
    protected $code;

    public function getPipeline(): string
    {
        return $this->pipeline;
    }

    public function setPipeline(string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getPrevious(): string
    {
        return $this->previous;
    }

    public function setPrevious(string $previous): self
    {
        $this->previous = $previous;

        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
