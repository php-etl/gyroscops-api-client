<?php

namespace Gyroscops\Api\Endpoint;

class PatchOfferItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Updates the Offer resource.
     *
     * @param string $id Resource identifier
     */
    public function __construct(string $id, ?\Gyroscops\Api\Model\Offer $requestBody = null)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/authentication/offer/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\Offer) {
            return [['Content-Type' => ['application/merge-patch+json']], $this->body];
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
     * @throws \Gyroscops\Api\Exception\PatchOfferItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchOfferItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchOfferItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\Offer|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\Offer', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PatchOfferItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PatchOfferItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PatchOfferItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
