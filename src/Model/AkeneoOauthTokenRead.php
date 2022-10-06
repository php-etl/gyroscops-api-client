<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class AkeneoOauthTokenRead
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string[]|null
     */
    protected $scopes;
    /**
     * @var string|null
     */
    protected $responseType = 'code';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

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

    /**
     * @return string[]|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes;
    }

    /**
     * @param string[]|null $scopes
     */
    public function setScopes(?array $scopes): self
    {
        $this->scopes = $scopes;

        return $this;
    }

    public function getResponseType(): ?string
    {
        return $this->responseType;
    }

    public function setResponseType(?string $responseType): self
    {
        $this->responseType = $responseType;

        return $this;
    }
}
