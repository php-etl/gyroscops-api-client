<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AutoloadInput
{
    /**
     * @var string
     */
    protected $namespace;
    /**
     * @var string[]
     */
    protected $paths;

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
