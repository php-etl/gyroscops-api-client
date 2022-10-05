<?php

namespace Gyroscops\Api\Model;

class ReferralCodeReferralCodeWrite
{
    /**
     * @var string|null
     */
    protected $user;

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }
}
