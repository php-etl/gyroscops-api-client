<?php

namespace Gyroscops\Api\Model;

class UpdateList
{
    /**
     * @var mixed|null
     */
    protected $iterator;

    /**
     * @return mixed
     */
    public function getIterator()
    {
        return $this->iterator;
    }

    /**
     * @param mixed $iterator
     */
    public function setIterator($iterator): self
    {
        $this->iterator = $iterator;

        return $this;
    }
}
