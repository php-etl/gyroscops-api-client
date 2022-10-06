<?php

namespace Gyroscops\Api\Model;

class Token
{
    /**
     * @var string|null
     */
    protected $token;

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }
}
