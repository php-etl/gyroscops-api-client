<?php

namespace Gyroscops\Api\Model;

class ExecutionDeclarePipelineExecutionCommandInput
{
    /**
     * 
     *
     * @var string
     */
    protected $schedule;
    /**
     * 
     *
     * @var string
     */
    protected $pipeline;
    /**
     * 
     *
     * @return string
     */
    public function getSchedule() : string
    {
        return $this->schedule;
    }
    /**
     * 
     *
     * @param string $schedule
     *
     * @return self
     */
    public function setSchedule(string $schedule) : self
    {
        $this->schedule = $schedule;
        return $this;
    }
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
}