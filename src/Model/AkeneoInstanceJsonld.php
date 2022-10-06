<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AkeneoInstanceJsonld
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var mixed|null
     */
    protected $context;
    /**
     * @var string|null
     */
    protected $id2;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string|null
     */
    protected $organization;
    /**
     * @var string|null
     */
    protected $workspace;
    /**
     * @var string|null
     */
    protected $secret;
    /**
     * @var string[]|null
     */
    protected $linkedAccounts;
    /**
     * @var string[]|null
     */
    protected $oauthTokens;

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

    public function getId2(): ?string
    {
        return $this->id2;
    }

    public function setId2(?string $id2): self
    {
        $this->id2 = $id2;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

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

    public function getWorkspace(): ?string
    {
        return $this->workspace;
    }

    public function setWorkspace(?string $workspace): self
    {
        $this->workspace = $workspace;

        return $this;
    }

    public function getSecret(): ?string
    {
        return $this->secret;
    }

    public function setSecret(?string $secret): self
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getLinkedAccounts(): ?array
    {
        return $this->linkedAccounts;
    }

    /**
     * @param string[]|null $linkedAccounts
     */
    public function setLinkedAccounts(?array $linkedAccounts): self
    {
        $this->linkedAccounts = $linkedAccounts;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getOauthTokens(): ?array
    {
        return $this->oauthTokens;
    }

    /**
     * @param string[]|null $oauthTokens
     */
    public function setOauthTokens(?array $oauthTokens): self
    {
        $this->oauthTokens = $oauthTokens;

        return $this;
    }
}
