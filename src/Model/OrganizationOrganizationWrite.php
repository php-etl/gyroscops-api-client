<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class OrganizationOrganizationWrite extends \ArrayObject
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
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $stripeCode;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getStripeCode(): ?string
    {
        return $this->stripeCode;
    }

    public function setStripeCode(?string $stripeCode): self
    {
        $this->initialized['stripeCode'] = true;
        $this->stripeCode = $stripeCode;

        return $this;
    }
}
