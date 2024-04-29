<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class BuyablePriceRead extends \ArrayObject
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
     * @var mixed[]|null
     */
    protected $type;

    /**
     * @return mixed[]|null
     */
    public function getType(): ?iterable
    {
        return $this->type;
    }

    /**
     * @param mixed[]|null $type
     */
    public function setType(?iterable $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
