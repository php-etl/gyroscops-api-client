<?php

namespace Gyroscops\Api\Endpoint;

class PatchVariableFromSecretItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Updates the VariableFromSecret resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\VariableFromSecret $requestBody 
     */
    public function __construct(string $id, \Gyroscops\Api\Model\VariableFromSecret $requestBody)
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
        return str_replace(array('{id}'), array($this->id), '/variable-from-secrets/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\VariableFromSecret) {
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
     * @throws \Gyroscops\Api\Exception\PatchVariableFromSecretItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchVariableFromSecretItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchVariableFromSecretItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\VariableFromSecret
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\VariableFromSecret', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PatchVariableFromSecretItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PatchVariableFromSecretItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PatchVariableFromSecretItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}