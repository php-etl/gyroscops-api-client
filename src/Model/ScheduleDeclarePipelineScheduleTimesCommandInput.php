<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ScheduleDeclarePipelineScheduleTimesCommandInput
{
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
     * @var int
     */
    protected $recurrences;

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

    public function getRecurrences(): int
    {
        return $this->recurrences;
    }

    public function setRecurrences(int $recurrences): self
    {
        $this->recurrences = $recurrences;

        return $this;
    }
}
