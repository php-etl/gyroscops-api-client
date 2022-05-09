<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class Credentials
{
    /**
     * @var string
     */
    protected $username;
    /**
     * @var string
     */
    protected $password;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
