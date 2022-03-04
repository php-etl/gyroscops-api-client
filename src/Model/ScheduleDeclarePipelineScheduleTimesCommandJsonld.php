<?php

namespace Gyroscops\Api\Model;

class ScheduleDeclarePipelineScheduleTimesCommandJsonld
{
    /**
     * 
     *
     * @var mixed
     */
    protected $context;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var ScheduleIdJsonld
     */
    protected $id2;
    /**
     * 
     *
     * @var PipelineIdJsonld
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
     * @var UserJsonld
     */
    protected $user;
    /**
     * 
     *
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }
    /**
     * 
     *
     * @param mixed $context
     *
     * @return self
     */
    public function setContext($context) : self
    {
        $this->context = $context;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return ScheduleIdJsonld
     */
    public function getId2() : ScheduleIdJsonld
    {
        return $this->id2;
    }
    /**
     * 
     *
     * @param ScheduleIdJsonld $id2
     *
     * @return self
     */
    public function setId2(ScheduleIdJsonld $id2) : self
    {
        $this->id2 = $id2;
        return $this;
    }
    /**
     * 
     *
     * @return PipelineIdJsonld
     */
    public function getPipeline() : PipelineIdJsonld
    {
        return $this->pipeline;
    }
    /**
     * 
     *
     * @param PipelineIdJsonld $pipeline
     *
     * @return self
     */
    public function setPipeline(PipelineIdJsonld $pipeline) : self
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
     * @return UserJsonld
     */
    public function getUser() : UserJsonld
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param UserJsonld $user
     *
     * @return self
     */
    public function setUser(UserJsonld $user) : self
    {
        $this->user = $user;
        return $this;
    }
}