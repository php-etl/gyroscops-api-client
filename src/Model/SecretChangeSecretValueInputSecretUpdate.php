<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class SecretChangeSecretValueInputSecretUpdate extends \ArrayObject
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
     * @var mixed[][]|null
     */
    protected $contents;

    /**
     * @return mixed[][]|null
     */
    public function getContents(): ?iterable
    {
        return $this->contents;
    }

    /**
     * @param mixed[][]|null $contents
     */
    public function setContents(?iterable $contents): self
    {
        $this->initialized['contents'] = true;
        $this->contents = $contents;

        return $this;
    }
}
