<?php

namespace Gyroscops\Api\Model;

class AutoloadInput
{
    /**
     * 
     *
     * @var string
     */
    protected $namespace;
    /**
     * 
     *
     * @var string[]
     */
    protected $paths;
    /**
     * 
     *
     * @return string
     */
    public function getNamespace() : string
    {
        return $this->namespace;
    }
    /**
     * 
     *
     * @param string $namespace
     *
     * @return self
     */
    public function setNamespace(string $namespace) : self
    {
        $this->namespace = $namespace;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPaths() : array
    {
        return $this->paths;
    }
    /**
     * 
     *
     * @param string[] $paths
     *
     * @return self
     */
    public function setPaths(array $paths) : self
    {
        $this->paths = $paths;
        return $this;
    }
}