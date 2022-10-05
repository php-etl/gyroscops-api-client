<?php

namespace Gyroscops\Api\Model;

class AkeneoInstanceAkeneoInstanceInputJsonld
{
    /**
     * @var mixed
     */
    protected $context;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $pimUrl;
    /**
     * @var string
     */
    protected $organization;
    /**
     * @var SecretInputJsonld
     */
    protected $secret;

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param mixed $context
     */
    public function setContext($context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPimUrl(): string
    {
        return $this->pimUrl;
    }

    public function setPimUrl(string $pimUrl): self
    {
        $this->pimUrl = $pimUrl;

        return $this;
    }

    public function getOrganization(): string
    {
        return $this->organization;
    }

    public function setOrganization(string $organization): self
    {
        $this->organization = $organization;

        return $this;
    }

    public function getSecret(): SecretInputJsonld
    {
        return $this->secret;
    }

    public function setSecret(SecretInputJsonld $secret): self
    {
        $this->secret = $secret;

        return $this;
    }
}
