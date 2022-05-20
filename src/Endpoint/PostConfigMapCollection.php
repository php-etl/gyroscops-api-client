<?php

namespace Gyroscops\Api\Endpoint;

class PostConfigMapCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    /**
     * Creates a ConfigMap resource.
     *
     * @param \Gyroscops\Api\Model\ConfigMapJsonld|\Gyroscops\Api\Model\ConfigMap $requestBody 
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
        return '/config-maps';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\ConfigMapJsonld) {
            return array(array('Content-Type' => array('application/ld+json')), $this->body);
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ConfigMap) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ConfigMap) {
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
     * @throws \Gyroscops\Api\Exception\PostConfigMapCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostConfigMapCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\ConfigMap
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ConfigMap', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PostConfigMapCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PostConfigMapCollectionUnprocessableEntityException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}