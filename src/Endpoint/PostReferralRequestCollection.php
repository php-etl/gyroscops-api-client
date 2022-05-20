<?php

namespace Gyroscops\Api\Endpoint;

class PostReferralRequestCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    /**
     * Creates a ReferralRequest resource.
     *
     * @param \Gyroscops\Api\Model\ReferralRequestReferralRequestInputJsonld|\Gyroscops\Api\Model\ReferralRequestReferralRequestInput $requestBody 
     */
    public function __construct($requestBody)
    {
        $this->body = $requestBody;
    }
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/referral/referral-requests';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\ReferralRequestReferralRequestInputJsonld) {
            return array(array('Content-Type' => array('application/ld+json')), $this->body);
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ReferralRequestReferralRequestInput) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ReferralRequestReferralRequestInput) {
            return array(array('Content-Type' => array('text/html')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Api\Exception\PostReferralRequestCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostReferralRequestCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\ReferralRequestReferralRequestRead
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ReferralRequestReferralRequestRead', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PostReferralRequestCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PostReferralRequestCollectionUnprocessableEntityException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}