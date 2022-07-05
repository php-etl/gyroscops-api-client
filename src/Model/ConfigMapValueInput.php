<?php

namespace Gyroscops\Api\Model;

class ConfigMapValueInput
{
    /**
     * 
     *
     * @var mixed
     */
    protected $arrayCopy;
    /**
     * 
     *
     * @var int
     */
    protected $flags;
    /**
     * 
     *
     * @var mixed
     */
    protected $iterator;
    /**
     * 
     *
     * @var string
     */
    protected $iteratorClass;
    /**
     * 
     *
     * @return mixed
     */
    public function getArrayCopy()
    {
        return $this->arrayCopy;
    }
    /**
     * 
     *
     * @param mixed $arrayCopy
     *
     * @return self
     */
    public function setArrayCopy($arrayCopy) : self
    {
        $this->arrayCopy = $arrayCopy;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFlags() : int
    {
        return $this->flags;
    }
    /**
     * 
     *
     * @param int $flags
     *
     * @return self
     */
    public function setFlags(int $flags) : self
    {
        $this->flags = $flags;
        return $this;
    }
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
    /**
     * 
     *
     * @return string
     */
    public function getIteratorClass() : string
    {
        return $this->iteratorClass;
    }
    /**
     * 
     *
     * @param string $iteratorClass
     *
     * @return self
     */
    public function setIteratorClass(string $iteratorClass) : self
    {
        $this->iteratorClass = $iteratorClass;
        return $this;
    }
}