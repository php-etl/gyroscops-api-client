<?php

namespace Gyroscops\Api\Endpoint;

class PutVariableFromConfigMapItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Replaces the VariableFromConfigMap resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\VariableFromConfigMapJsonld|\Gyroscops\Api\Model\VariableFromConfigMap $requestBody 
     */
    public function __construct(string $id, $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/variable-from-config-maps/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\VariableFromConfigMapJsonld) {
            return array(array('Content-Type' => array('application/ld+json')), $this->body);
        }
        if ($this->body instanceof \Gyroscops\Api\Model\VariableFromConfigMap) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Gyroscops\Api\Model\VariableFromConfigMap) {
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
     * @throws \Gyroscops\Api\Exception\PutVariableFromConfigMapItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PutVariableFromConfigMapItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PutVariableFromConfigMapItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\VariableFromConfigMap
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\VariableFromConfigMap', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PutVariableFromConfigMapItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PutVariableFromConfigMapItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PutVariableFromConfigMapItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}