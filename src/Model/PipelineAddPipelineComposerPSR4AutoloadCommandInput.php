<?php

namespace Gyroscops\Api\Model;

class PipelineAddPipelineComposerPSR4AutoloadCommandInput
{
    /**
     * @var string|null
     */
    protected $pipeline;
    /**
     * @var string|null
     */
    protected $namespace;
    /**
     * @var string[]|null
     */
    protected $paths;

    public function getPipeline(): ?string
    {
        return $this->pipeline;
    }

    public function setPipeline(?string $pipeline): self
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    public function setNamespace(?string $namespace): self
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPaths(): ?array
    {
        return $this->paths;
    }

    /**
     * @param string[]|null $paths
     */
    public function setPaths(?array $paths): self
    {
        $this->paths = $paths;

        return $this;
    }
}
