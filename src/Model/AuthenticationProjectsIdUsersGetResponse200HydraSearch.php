<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AuthenticationProjectsIdUsersGetResponse200HydraSearch
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $hydraTemplate;
    /**
     * @var string
     */
    protected $hydraVariableRepresentation;
    /**
     * @var AuthenticationProjectsIdUsersGetResponse200HydraSearchHydraMappingItem[]
     */
    protected $hydraMapping;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getHydraTemplate(): string
    {
        return $this->hydraTemplate;
    }

    public function setHydraTemplate(string $hydraTemplate): self
    {
        $this->hydraTemplate = $hydraTemplate;

        return $this;
    }

    public function getHydraVariableRepresentation(): string
    {
        return $this->hydraVariableRepresentation;
    }

    public function setHydraVariableRepresentation(string $hydraVariableRepresentation): self
    {
        $this->hydraVariableRepresentation = $hydraVariableRepresentation;

        return $this;
    }

    /**
     * @return AuthenticationProjectsIdUsersGetResponse200HydraSearchHydraMappingItem[]
     */
    public function getHydraMapping(): array
    {
        return $this->hydraMapping;
    }

    /**
     * @param AuthenticationProjectsIdUsersGetResponse200HydraSearchHydraMappingItem[] $hydraMapping
     */
    public function setHydraMapping(array $hydraMapping): self
    {
        $this->hydraMapping = $hydraMapping;

        return $this;
    }
}
