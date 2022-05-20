<?php

namespace Gyroscops\Api\Endpoint;

class PatchVariableFromConfigMapItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Updates the VariableFromConfigMap resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\VariableFromConfigMap $requestBody 
     */
    public function __construct(string $id, \Gyroscops\Api\Model\VariableFromConfigMap $requestBody)
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
        return str_replace(array('{id}'), array($this->id), '/variable-from-config-maps/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\VariableFromConfigMap) {
            return array(array('Content-Type' => array('application/merge-patch+json')), $this->body);
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
     * @throws \Gyroscops\Api\Exception\PatchVariableFromConfigMapItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchVariableFromConfigMapItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchVariableFromConfigMapItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\VariableFromConfigMap
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\VariableFromConfigMap', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PatchVariableFromConfigMapItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PatchVariableFromConfigMapItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PatchVariableFromConfigMapItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}