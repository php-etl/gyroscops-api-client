<?php

namespace Gyroscops\Api\Model;

class ScheduleDeclarePipelineScheduleOnceCommandJsonld
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
    protected $date;
    /**
     * 
     *
     * @var UserIdJsonld
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
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return UserIdJsonld
     */
    public function getUser() : UserIdJsonld
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param UserIdJsonld $user
     *
     * @return self
     */
    public function setUser(UserIdJsonld $user) : self
    {
        $this->user = $user;
        return $this;
    }
}