<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class AuthenticationOrganizationsIdExternalCollaboratorsGetLdjsonResponse200HydraView extends \ArrayObject
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
    protected $id;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $hydraFirst;
    /**
     * @var string|null
     */
    protected $hydraLast;
    /**
     * @var string|null
     */
    protected $hydraPrevious;
    /**
     * @var string|null
     */
    protected $hydraNext;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getHydraFirst(): ?string
    {
        return $this->hydraFirst;
    }

    public function setHydraFirst(?string $hydraFirst): self
    {
        $this->initialized['hydraFirst'] = true;
        $this->hydraFirst = $hydraFirst;

        return $this;
    }

    public function getHydraLast(): ?string
    {
        return $this->hydraLast;
    }

    public function setHydraLast(?string $hydraLast): self
    {
        $this->initialized['hydraLast'] = true;
        $this->hydraLast = $hydraLast;

        return $this;
    }

    public function getHydraPrevious(): ?string
    {
        return $this->hydraPrevious;
    }

    public function setHydraPrevious(?string $hydraPrevious): self
    {
        $this->initialized['hydraPrevious'] = true;
        $this->hydraPrevious = $hydraPrevious;

        return $this;
    }

    public function getHydraNext(): ?string
    {
        return $this->hydraNext;
    }

    public function setHydraNext(?string $hydraNext): self
    {
        $this->initialized['hydraNext'] = true;
        $this->hydraNext = $hydraNext;

        return $this;
    }
}
