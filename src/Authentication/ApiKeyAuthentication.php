<?php

declare(strict_types=1);

namespace Gyroscops\Api\Authentication;

class ApiKeyAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }

    public function authentication(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\RequestInterface
    {
        return $request->withHeader('Authorization', $this->{'apiKey'});
    }

    public function getScope(): string
    {
        return 'apiKey';
    }
}
