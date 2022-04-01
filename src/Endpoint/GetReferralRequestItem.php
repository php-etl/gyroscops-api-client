<?php

namespace Gyroscops\Api\Endpoint;

class GetReferralRequestItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Retrieves a ReferralRequest resource.
     *
     * @param string $id Resource identifier
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/referral-requests/{id}');
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
     * @throws \Gyroscops\Api\Exception\GetReferralRequestItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ReferralRequestReferralRequestRead
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ReferralRequestReferralRequestRead', 'json');
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\GetReferralRequestItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}