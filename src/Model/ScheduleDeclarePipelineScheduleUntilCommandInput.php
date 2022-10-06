<?php

namespace Gyroscops\Api\Model;

class ScheduleDeclarePipelineScheduleUntilCommandInput
{
    /**
     * @var string|null
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

    public function getPipeline(): ?string
    {
        return $this->pipeline;
    }

    public function setPipeline(?string $pipeline): self
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
}
