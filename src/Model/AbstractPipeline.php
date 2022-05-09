<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AbstractPipeline
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string[]
     */
    protected $steps;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSteps(): array
    {
        return $this->steps;
    }

    /**
     * @param string[] $steps
     */
    public function setSteps(array $steps): self
    {
        $this->steps = $steps;

        return $this;
    }
}
