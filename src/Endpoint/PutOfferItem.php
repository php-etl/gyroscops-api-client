<?php

namespace Gyroscops\Api\Endpoint;

class PutOfferItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Replaces the Offer resource.
     *
     * @param string                                                      $id          Resource identifier
     * @param \Gyroscops\Api\Model\OfferJsonld|\Gyroscops\Api\Model\Offer $requestBody
     */
    public function __construct(string $id, $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/authentication/offer/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\OfferJsonld) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\Offer) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\Offer) {
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
     * @throws \Gyroscops\Api\Exception\PutOfferItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PutOfferItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PutOfferItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\Offer|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\Offer', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PutOfferItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PutOfferItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PutOfferItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}