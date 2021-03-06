<?php

namespace Gyroscops\Api\Model;

class ScheduleDeclarePipelineScheduleImmediateCommand
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