<?php

namespace Gyroscops\Api\Model;

class AkeneoOauthTokenOauthStateInput
{
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string[]
     */
    protected $scope;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getScope(): array
    {
        return $this->scope;
    }

    /**
     * @param string[] $scope
     */
    public function setScope(array $scope): self
    {
        $this->scope = $scope;

        return $this;
    }
}
