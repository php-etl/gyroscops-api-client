<?php

namespace Gyroscops\Api\Model;

class ScheduleDeclarePipelineScheduleImmediateCommandInput
{
    /**
     * @var string|null
     */
    protected $pipeline;
    /**
     * @var string|null
     */
    protected $organization;

    public function getPipeline(): ?string
    {
        return $this->pipeline;
    }

    public function setPipeline(?string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;

        return $this;
    }
}
