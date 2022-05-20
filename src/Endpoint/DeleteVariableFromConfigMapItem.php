<?php

namespace Gyroscops\Api\Endpoint;

class DeleteVariableFromConfigMapItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Removes the VariableFromConfigMap resource.
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
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/variable-from-config-maps/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Api\Exception\DeleteVariableFromConfigMapItemNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\DeleteVariableFromConfigMapItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}