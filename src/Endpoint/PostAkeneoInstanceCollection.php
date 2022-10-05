<?php

namespace Gyroscops\Api\Endpoint;

class PostAkeneoInstanceCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;

    /**
     * Creates a AkeneoInstance resource.
     *
     * @param \Gyroscops\Api\Model\AkeneoInstanceAkeneoInstanceInputJsonld|\Gyroscops\Api\Model\AkeneoInstanceAkeneoInstanceInput $requestBody
     */
    public function __construct($requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/gateway/akeneo/instance';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\AkeneoInstanceAkeneoInstanceInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\AkeneoInstanceAkeneoInstanceInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\AkeneoInstanceAkeneoInstanceInput) {
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
     * @throws \Gyroscops\Api\Exception\PostAkeneoInstanceCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostAkeneoInstanceCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\AkeneoInstance|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (201 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\AkeneoInstance', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PostAkeneoInstanceCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PostAkeneoInstanceCollectionUnprocessableEntityException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
