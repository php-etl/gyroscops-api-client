<?php

namespace Gyroscops\Api\Endpoint;

class PostSecretCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    /**
     * Creates a Secret resource.
     *
     * @param \Gyroscops\Api\Model\SecretSecretInputJsonld|\Gyroscops\Api\Model\SecretSecretInput $requestBody 
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
        return '/environment/secret';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\SecretSecretInputJsonld) {
            return array(array('Content-Type' => array('application/ld+json')), $this->body);
        }
        if ($this->body instanceof \Gyroscops\Api\Model\SecretSecretInput) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Gyroscops\Api\Model\SecretSecretInput) {
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
     * @throws \Gyroscops\Api\Exception\PostSecretCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostSecretCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\Secret
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\Secret', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PostSecretCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PostSecretCollectionUnprocessableEntityException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}