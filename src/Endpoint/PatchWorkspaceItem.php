<?php

namespace Gyroscops\Api\Endpoint;

class PatchWorkspaceItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Updates the Workspace resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\Workspace $requestBody 
     */
    public function __construct(string $id, \Gyroscops\Api\Model\Workspace $requestBody)
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
        return str_replace(array('{id}'), array($this->id), '/authentication/workspaces/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\Workspace) {
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
     * @throws \Gyroscops\Api\Exception\PatchWorkspaceItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchWorkspaceItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchWorkspaceItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\Workspace
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\Workspace', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PatchWorkspaceItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PatchWorkspaceItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PatchWorkspaceItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}