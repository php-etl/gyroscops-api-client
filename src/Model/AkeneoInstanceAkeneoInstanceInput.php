<?php

namespace Gyroscops\Api\Model;

class AkeneoInstanceAkeneoInstanceInput
{
    /**
     * @var string
     */
    protected $pimUrl;
    /**
     * @var string
     */
    protected $organization;
    /**
     * @var SecretInput
     */
    protected $secret;

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

    public function getSecret(): SecretInput
    {
        return $this->secret;
    }

    public function setSecret(SecretInput $secret): self
    {
        $this->secret = $secret;

        return $this;
    }
}
