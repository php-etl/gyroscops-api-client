<?php

namespace Gyroscops\Api\Endpoint;

class AcceptReferralRequestReferralRequestItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Accepts a referral request.
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
        return str_replace(['{id}'], [$this->id], '/referral/referral-request/{id}/accept');
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
     * @throws \Gyroscops\Api\Exception\AcceptReferralRequestReferralRequestItemBadRequestException
     * @throws \Gyroscops\Api\Exception\AcceptReferralRequestReferralRequestItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\AcceptReferralRequestReferralRequestItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ReferralRequestReferralRequestRead|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ReferralRequestReferralRequestRead', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\AcceptReferralRequestReferralRequestItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\AcceptReferralRequestReferralRequestItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\AcceptReferralRequestReferralRequestItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
