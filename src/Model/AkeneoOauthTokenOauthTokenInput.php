<?php

namespace Gyroscops\Api\Model;

class AkeneoOauthTokenOauthTokenInput
{
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $code;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

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
}
