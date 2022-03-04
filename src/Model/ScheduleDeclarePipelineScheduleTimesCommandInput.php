<?php

namespace Gyroscops\Api\Model;

class ScheduleDeclarePipelineScheduleTimesCommandInput
{
    /**
     * 
     *
     * @var string
     */
    protected $pipeline;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $start;
    /**
     * 
     *
     * @var string
     */
    protected $interval;
    /**
     * 
     *
     * @var int
     */
    protected $recurrences;
    /**
     * 
     *
     * @return string
     */
    public function getPipeline() : string
    {
        return $this->pipeline;
    }
    /**
     * 
     *
     * @param string $pipeline
     *
     * @return self
     */
    public function setPipeline(string $pipeline) : self
    {
        $this->pipeline = $pipeline;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getStart() : \DateTime
    {
        return $this->start;
    }
    /**
     * 
     *
     * @param \DateTime $start
     *
     * @return self
     */
    public function setStart(\DateTime $start) : self
    {
        $this->start = $start;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInterval() : string
    {
        return $this->interval;
    }
    /**
     * 
     *
     * @param string $interval
     *
     * @return self
     */
    public function setInterval(string $interval) : self
    {
        $this->interval = $interval;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRecurrences() : int
    {
        return $this->recurrences;
    }
    /**
     * 
     *
     * @param int $recurrences
     *
     * @return self
     */
    public function setRecurrences(int $recurrences) : self
    {
        $this->recurrences = $recurrences;
        return $this;
    }
}