<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class PipelineAddPipelineStepProbCommandInput
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $code;
    /**
     * @var Probe
     */
    protected $probe;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

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

    public function getProbe(): Probe
    {
        return $this->probe;
    }

    public function setProbe(Probe $probe): self
    {
        $this->probe = $probe;

        return $this;
    }
}
