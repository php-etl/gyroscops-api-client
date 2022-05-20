<?php

namespace Gyroscops\Api\Endpoint;

class PutWorkspaceItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Replaces the Workspace resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\WorkspaceJsonld|\Gyroscops\Api\Model\Workspace $requestBody 
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
        return str_replace(array('{id}'), array($this->id), '/authentication/workspaces/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\WorkspaceJsonld) {
            return array(array('Content-Type' => array('application/ld+json')), $this->body);
        }
        if ($this->body instanceof \Gyroscops\Api\Model\Workspace) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Gyroscops\Api\Model\Workspace) {
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
     * @throws \Gyroscops\Api\Exception\PutWorkspaceItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PutWorkspaceItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PutWorkspaceItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\Workspace
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\Workspace', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PutWorkspaceItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PutWorkspaceItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PutWorkspaceItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}