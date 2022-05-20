<?php

namespace Gyroscops\Api\Model;

class PipelineAddPipelineComposerPSR4AutoloadCommandInputJsonld
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
     * @var string
     */
    protected $pipeline;
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