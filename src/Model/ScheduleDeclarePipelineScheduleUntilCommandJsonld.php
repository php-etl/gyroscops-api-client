<?php

namespace Gyroscops\Api\Model;

class ScheduleDeclarePipelineScheduleUntilCommandJsonld
{
    /**
     * @var mixed|null
     */
    protected $context;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var ScheduleIdJsonld|null
     */
    protected $id2;
    /**
     * @var PipelineIdJsonld|null
     */
    protected $pipeline;
    /**
     * @var \DateTime|null
     */
    protected $start;
    /**
     * @var string|null
     */
    protected $interval;
    /**
     * @var \DateTime|null
     */
    protected $end;
    /**
     * @var UserIdJsonld|null
     */
    protected $user;

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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getId2(): ?ScheduleIdJsonld
    {
        return $this->id2;
    }

    public function setId2(?ScheduleIdJsonld $id2): self
    {
        $this->id2 = $id2;

        return $this;
    }

    public function getPipeline(): ?PipelineIdJsonld
    {
        return $this->pipeline;
    }

    public function setPipeline(?PipelineIdJsonld $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getStart(): ?\DateTime
    {
        return $this->start;
    }

    public function setStart(?\DateTime $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getInterval(): ?string
    {
        return $this->interval;
    }

    public function setInterval(?string $interval): self
    {
        $this->interval = $interval;

        return $this;
    }

    public function getEnd(): ?\DateTime
    {
        return $this->end;
    }

    public function setEnd(?\DateTime $end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getUser(): ?UserIdJsonld
    {
        return $this->user;
    }

    public function setUser(?UserIdJsonld $user): self
    {
        $this->user = $user;

        return $this;
    }
}
