<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AkeneoLinkedAccount
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $user;
    /**
     * @var string|null
     */
    protected $tokenId;
    /**
     * @var string|null
     */
    protected $akeneoUserId;
    /**
     * @var string|null
     */
    protected $token;
    /**
     * @var string|null
     */
    protected $akeneoInstance;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getTokenId(): ?string
    {
        return $this->tokenId;
    }

    public function setTokenId(?string $tokenId): self
    {
        $this->tokenId = $tokenId;

        return $this;
    }

    public function getAkeneoUserId(): ?string
    {
        return $this->akeneoUserId;
    }

    public function setAkeneoUserId(?string $akeneoUserId): self
    {
        $this->akeneoUserId = $akeneoUserId;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getAkeneoInstance(): ?string
    {
        return $this->akeneoInstance;
    }

    public function setAkeneoInstance(?string $akeneoInstance): self
    {
        $this->akeneoInstance = $akeneoInstance;

        return $this;
    }
}
