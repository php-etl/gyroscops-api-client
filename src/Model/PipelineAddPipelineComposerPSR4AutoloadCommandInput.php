<?php

namespace Gyroscops\Api\Model;

class PipelineAddPipelineComposerPSR4AutoloadCommandInput
{
    /**
     * @var string
     */
    protected $pipeline;
    /**
     * @var string
     */
    protected $namespace;
    /**
     * @var string[]
     */
    protected $paths;

    public function getPipeline(): string
    {
        return $this->pipeline;
    }

    public function setPipeline(string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function setNamespace(string $namespace): self
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getPaths(): array
    {
        return $this->paths;
    }

    /**
     * @param string[] $paths
     */
    public function setPaths(array $paths): self
    {
        $this->paths = $paths;

        return $this;
    }
}
