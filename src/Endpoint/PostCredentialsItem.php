<?php

namespace Gyroscops\Api\Endpoint;

class PostCredentialsItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param null|\Gyroscops\Api\Model\Credentials $requestBody 
     */
    public function __construct(?\Gyroscops\Api\Model\Credentials $requestBody = null)
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
        return '/authentication_token';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\Credentials) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
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
     *
     * @return null|\Gyroscops\Api\Model\Token
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\Token', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}