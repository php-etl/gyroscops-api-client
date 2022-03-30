<?php

namespace Gyroscops\Api\Model;

class ScheduleDeclarePipelineScheduleTimesCommand
{
    /**
     * 
     *
     * @var mixed
     */
    protected $id;
    /**
     * 
     *
     * @var mixed
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
     * @var mixed
     */
    protected $user;
    /**
     * 
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPipeline()
    {
        return $this->pipeline;
    }
    /**
     * 
     *
     * @param mixed $pipeline
     *
     * @return self
     */
    public function setPipeline($pipeline) : self
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
    /**
     * 
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param mixed $user
     *
     * @return self
     */
    public function setUser($user) : self
    {
        $this->user = $user;
        return $this;
    }
}