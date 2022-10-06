<?php

namespace Gyroscops\Api\Endpoint;

class PostOnPremiseRequestCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;

    /**
     * Creates a OnPremiseRequest resource.
     *
     * @param \Gyroscops\Api\Model\OnPremiseRequestJsonldOnPremiseRequestWrite|\Gyroscops\Api\Model\OnPremiseRequestOnPremiseRequestWrite|null $requestBody
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
        return '/referral/on-premise-requests';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\OnPremiseRequestJsonldOnPremiseRequestWrite) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\OnPremiseRequestOnPremiseRequestWrite) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\OnPremiseRequestOnPremiseRequestWrite) {
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
     * @throws \Gyroscops\Api\Exception\PostOnPremiseRequestCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostOnPremiseRequestCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\OnPremiseRequestOnPremiseRequestRead|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (201 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\OnPremiseRequestOnPremiseRequestRead', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PostOnPremiseRequestCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PostOnPremiseRequestCollectionUnprocessableEntityException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
