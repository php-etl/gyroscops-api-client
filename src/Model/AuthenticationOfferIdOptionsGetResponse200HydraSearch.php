<?php

namespace Gyroscops\Api\Model;

class AuthenticationOfferIdOptionsGetResponse200HydraSearch
{
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $hydraTemplate;
    /**
     * @var string|null
     */
    protected $hydraVariableRepresentation;
    /**
     * @var AuthenticationOfferIdOptionsGetResponse200HydraSearchHydraMappingItem[]|null
     */
    protected $hydraMapping;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getHydraTemplate(): ?string
    {
        return $this->hydraTemplate;
    }

    public function setHydraTemplate(?string $hydraTemplate): self
    {
        $this->hydraTemplate = $hydraTemplate;

        return $this;
    }

    public function getHydraVariableRepresentation(): ?string
    {
        return $this->hydraVariableRepresentation;
    }

    public function setHydraVariableRepresentation(?string $hydraVariableRepresentation): self
    {
        $this->hydraVariableRepresentation = $hydraVariableRepresentation;

        return $this;
    }

    /**
     * @return AuthenticationOfferIdOptionsGetResponse200HydraSearchHydraMappingItem[]|null
     */
    public function getHydraMapping(): ?array
    {
        return $this->hydraMapping;
    }

    /**
     * @param AuthenticationOfferIdOptionsGetResponse200HydraSearchHydraMappingItem[]|null $hydraMapping
     */
    public function setHydraMapping(?array $hydraMapping): self
    {
        $this->hydraMapping = $hydraMapping;

        return $this;
    }
}
