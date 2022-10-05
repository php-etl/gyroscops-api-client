<?php

namespace Gyroscops\Api\Model;

class ScheduleDeclarePipelineScheduleTimesCommand
{
    /**
     * @var mixed
     */
    protected $id;
    /**
     * @var mixed
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
    /**
     * @var mixed
     */
    protected $user;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPipeline()
    {
        return $this->pipeline;
    }

    /**
     * @param mixed $pipeline
     */
    public function setPipeline($pipeline): self
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

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }
}
