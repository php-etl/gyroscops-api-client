<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class ReferralCodeReferralCodeRead
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $user;
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string[]
     */
    protected $referralRequests;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
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

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getReferralRequests(): array
    {
        return $this->referralRequests;
    }

    /**
     * @param string[] $referralRequests
     */
    public function setReferralRequests(array $referralRequests): self
    {
        $this->referralRequests = $referralRequests;

        return $this;
    }
}
