<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ConfigurationChangeConfigurationValueInputConfigurationUpdate extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var string[]|null
     */
    protected $contents;

    /**
     * @return string[]|null
     */
    public function getContents(): ?iterable
    {
        return $this->contents;
    }

    /**
     * @param string[]|null $contents
     */
    public function setContents(?iterable $contents): self
    {
        $this->initialized['contents'] = true;
        $this->contents = $contents;

        return $this;
    }
}
