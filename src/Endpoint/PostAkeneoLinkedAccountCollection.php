<?php

namespace Gyroscops\Api\Endpoint;

class PostAkeneoLinkedAccountCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;

    /**
     * Creates a AkeneoLinkedAccount resource.
     *
     * @param \Gyroscops\Api\Model\AkeneoLinkedAccountAkeneoLinkedAccountsInputJsonld|\Gyroscops\Api\Model\AkeneoLinkedAccountAkeneoLinkedAccountsInput|null $requestBody
     */
    public function __construct($requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/gateway/akeneo/linked-account';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\AkeneoLinkedAccountAkeneoLinkedAccountsInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\AkeneoLinkedAccountAkeneoLinkedAccountsInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\AkeneoLinkedAccountAkeneoLinkedAccountsInput) {
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
     * @throws \Gyroscops\Api\Exception\PostAkeneoLinkedAccountCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostAkeneoLinkedAccountCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\AkeneoLinkedAccount|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (201 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\AkeneoLinkedAccount', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PostAkeneoLinkedAccountCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PostAkeneoLinkedAccountCollectionUnprocessableEntityException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
