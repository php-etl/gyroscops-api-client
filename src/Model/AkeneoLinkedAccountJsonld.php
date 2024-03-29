<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class AkeneoLinkedAccountJsonld extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
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
        $this->initialized['context'] = true;
        $this->context = $context;

        return $this;
    }

    public function getId2(): ?string
    {
        return $this->id2;
    }

    public function setId2(?string $id2): self
    {
        $this->initialized['id2'] = true;
        $this->id2 = $id2;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }

    public function getTokenId(): ?string
    {
        return $this->tokenId;
    }

    public function setTokenId(?string $tokenId): self
    {
        $this->initialized['tokenId'] = true;
        $this->tokenId = $tokenId;

        return $this;
    }

    public function getAkeneoUserId(): ?string
    {
        return $this->akeneoUserId;
    }

    public function setAkeneoUserId(?string $akeneoUserId): self
    {
        $this->initialized['akeneoUserId'] = true;
        $this->akeneoUserId = $akeneoUserId;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;

        return $this;
    }

    public function getAkeneoInstance(): ?string
    {
        return $this->akeneoInstance;
    }

    public function setAkeneoInstance(?string $akeneoInstance): self
    {
        $this->initialized['akeneoInstance'] = true;
        $this->akeneoInstance = $akeneoInstance;

        return $this;
    }
}
