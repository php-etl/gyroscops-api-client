<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class PipelineMoveBeforePipelineStepCommandInput
{
    /**
     * @var string
     */
    protected $pipeline;
    /**
     * @var string
     */
    protected $next;
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

    public function getNext(): string
    {
        return $this->next;
    }

    public function setNext(string $next): self
    {
        $this->next = $next;

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
