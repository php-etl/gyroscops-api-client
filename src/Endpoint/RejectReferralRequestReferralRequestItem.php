<?php

namespace Gyroscops\Api\Endpoint;

class RejectReferralRequestReferralRequestItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Rejects a referral request
     *
     * @param string $id Resource identifier
     * @param null $requestBody 
     */
    public function __construct(string $id, $requestBody = null)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/referral/referral/requests/{id}/reject');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemBadRequestException
     * @throws \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ReferralRequestReferralRequestRead
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
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
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}