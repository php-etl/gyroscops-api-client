<?php

namespace Gyroscops\Api\Model;

class ProbeList
{
    /**
     * 
     *
     * @var mixed
     */
    protected $iterator;
    /**
     * 
     *
     * @return mixed
     */
    public function getIterator()
    {
        return $this->iterator;
    }
    /**
     * 
     *
     * @param mixed $iterator
     *
     * @return self
     */
    public function setIterator($iterator) : self
    {
        $this->iterator = $iterator;
        return $this;
    }
}