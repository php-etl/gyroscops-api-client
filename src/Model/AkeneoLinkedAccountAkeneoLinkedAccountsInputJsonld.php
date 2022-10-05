<?php

namespace Gyroscops\Api\Model;

class AkeneoLinkedAccountAkeneoLinkedAccountsInputJsonld
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
