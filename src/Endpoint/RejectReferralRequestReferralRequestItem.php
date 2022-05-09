<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class RejectReferralRequestReferralRequestItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Rejects a referral request.
     *
     * @param string $id          Resource identifier
     * @param null   $requestBody
     */
    public function __construct(string $id, $requestBody = null)
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
        return str_replace(['{id}'], [$this->id], '/referral-requests/{id}/reject');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemBadRequestException
     * @throws \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ReferralRequestReferralRequestRead|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ReferralRequestReferralRequestRead', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
