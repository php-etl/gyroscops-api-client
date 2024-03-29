<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class PipelineRemovePipelineComposerPackageCommandInput extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $package;

    public function getPackage(): ?string
    {
        return $this->package;
    }

    public function setPackage(?string $package): self
    {
        $this->initialized['package'] = true;
        $this->package = $package;

        return $this;
    }
}
