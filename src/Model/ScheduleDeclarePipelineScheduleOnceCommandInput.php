<?php

namespace Gyroscops\Api\Model;

class ScheduleDeclarePipelineScheduleOnceCommandInput
{
    /**
     * @var string|null
     */
    protected $pipeline;
    /**
     * @var \DateTime|null
     */
    protected $date;

    public function getPipeline(): ?string
    {
        return $this->pipeline;
    }

    public function setPipeline(?string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }
}
