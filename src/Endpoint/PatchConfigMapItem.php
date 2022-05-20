<?php

namespace Gyroscops\Api\Endpoint;

class PatchConfigMapItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Updates the ConfigMap resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\ConfigMap $requestBody 
     */
    public function __construct(string $id, \Gyroscops\Api\Model\ConfigMap $requestBody)
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
        return str_replace(array('{id}'), array($this->id), '/config-maps/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\ConfigMap) {
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
     * @throws \Gyroscops\Api\Exception\PatchConfigMapItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchConfigMapItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchConfigMapItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ConfigMap
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ConfigMap', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PatchConfigMapItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PatchConfigMapItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PatchConfigMapItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}