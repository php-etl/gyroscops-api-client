<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ScheduleDeclarePipelineScheduleUntilCommandInputJsonld
{
    /**
     * @var mixed
     */
    protected $context;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $pipeline;
    /**
     * @var \DateTime
     */
    protected $start;
    /**
     * @var string
     */
    protected $interval;
    /**
     * @var \DateTime
     */
    protected $end;

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param mixed $context
     */
    public function setContext($context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPipeline(): string
    {
        return $this->pipeline;
    }

    public function setPipeline(string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getStart(): \DateTime
    {
        return $this->start;
    }

    public function setStart(\DateTime $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getInterval(): string
    {
        return $this->interval;
    }

    public function setInterval(string $interval): self
    {
        $this->interval = $interval;

        return $this;
    }

    public function getEnd(): \DateTime
    {
        return $this->end;
    }

    public function setEnd(\DateTime $end): self
    {
        $this->end = $end;

        return $this;
    }
}
