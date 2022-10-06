<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AkeneoInstanceAkeneoInstanceInputJsonld
{
    /**
     * @var mixed|null
     */
    protected $context;
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
    protected $pimUrl;
    /**
     * @var string|null
     */
    protected $organization;
    /**
     * @var SecretInputJsonld|null
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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPimUrl(): ?string
    {
        return $this->pimUrl;
    }

    public function setPimUrl(?string $pimUrl): self
    {
        $this->pimUrl = $pimUrl;

        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;

        return $this;
    }

    public function getSecret(): ?SecretInputJsonld
    {
        return $this->secret;
    }

    public function setSecret(?SecretInputJsonld $secret): self
    {
        $this->secret = $secret;

        return $this;
    }
}
