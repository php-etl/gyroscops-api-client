<?php

namespace Gyroscops\Api\Model;

class AkeneoLinkedAccountAkeneoLinkedAccountsInput
{
    /**
     * @var string
     */
    protected $akeneoInstance;
    /**
     * @var string
     */
    protected $tokenId;
    /**
     * @var string
     */
    protected $akeneoUserId;
    /**
     * @var string
     */
    protected $token;

    public function getAkeneoInstance(): string
    {
        return $this->akeneoInstance;
    }

    public function setAkeneoInstance(string $akeneoInstance): self
    {
        $this->akeneoInstance = $akeneoInstance;

        return $this;
    }

    public function getTokenId(): string
    {
        return $this->tokenId;
    }

    public function setTokenId(string $tokenId): self
    {
        $this->tokenId = $tokenId;

        return $this;
    }

    public function getAkeneoUserId(): string
    {
        return $this->akeneoUserId;
    }

    public function setAkeneoUserId(string $akeneoUserId): self
    {
        $this->akeneoUserId = $akeneoUserId;

        return $this;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }
}
