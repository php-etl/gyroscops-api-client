<?php

namespace Gyroscops\Api\Endpoint;

class PutAkeneoOauthTokenAkeneoOauthTokenCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;

    /**
     * Generate an Akeneo OAuth token.
     *
     * @param \Gyroscops\Api\Model\GatewayAkeneoOauthTokenPutBody|\Gyroscops\Api\Model\AkeneoOauthTokenOauthTokenInput[] $requestBody
     */
    public function __construct($requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return '/gateway/akeneo/oauth/token';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\GatewayAkeneoOauthTokenPutBody) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \Gyroscops\Api\Model\AkeneoOauthTokenOauthTokenInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \Gyroscops\Api\Model\AkeneoOauthTokenOauthTokenInput) {
            return [['Content-Type' => ['text/html']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Api\Exception\PutAkeneoOauthTokenAkeneoOauthTokenCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PutAkeneoOauthTokenAkeneoOauthTokenCollectionUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PutAkeneoOauthTokenAkeneoOauthTokenCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PutAkeneoOauthTokenAkeneoOauthTokenCollectionUnprocessableEntityException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}