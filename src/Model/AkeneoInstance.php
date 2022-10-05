<?php

namespace Gyroscops\Api\Model;

class AkeneoInstance
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $organization;
    /**
     * @var string|null
     */
    protected $workspace;
    /**
     * @var string
     */
    protected $secret;
    /**
     * @var string[]
     */
    protected $linkedAccounts;
    /**
     * @var string[]
     */
    protected $oauthTokens;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

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

    public function getWorkspace(): ?string
    {
        return $this->workspace;
    }

    public function setWorkspace(?string $workspace): self
    {
        $this->workspace = $workspace;

        return $this;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    public function setSecret(string $secret): self
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getLinkedAccounts(): array
    {
        return $this->linkedAccounts;
    }

    /**
     * @param string[] $linkedAccounts
     */
    public function setLinkedAccounts(array $linkedAccounts): self
    {
        $this->linkedAccounts = $linkedAccounts;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOauthTokens(): array
    {
        return $this->oauthTokens;
    }

    /**
     * @param string[] $oauthTokens
     */
    public function setOauthTokens(array $oauthTokens): self
    {
        $this->oauthTokens = $oauthTokens;

        return $this;
    }
}
