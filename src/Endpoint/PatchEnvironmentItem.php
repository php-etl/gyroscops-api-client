<?php

namespace Gyroscops\Api\Endpoint;

class PatchEnvironmentItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Updates the Environment resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\Environment $requestBody 
     */
    public function __construct(string $id, \Gyroscops\Api\Model\Environment $requestBody)
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
        return str_replace(array('{id}'), array($this->id), '/environments/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\Environment) {
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
     * @throws \Gyroscops\Api\Exception\PatchEnvironmentItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchEnvironmentItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchEnvironmentItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\Environment
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\Environment', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PatchEnvironmentItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PatchEnvironmentItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PatchEnvironmentItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}