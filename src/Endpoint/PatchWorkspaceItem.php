<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class PatchWorkspaceItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $accept;

    /**
     * Updates the Workspace resource.
     *
     * @param string $id     Resource identifier
     * @param array  $accept Accept content header application/ld+json|application/json|text/html
     */
    public function __construct(string $id, ?\Gyroscops\Api\Model\WorkspaceWorkspaceWrite $requestBody = null, array $accept = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/authentication/workspaces/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\WorkspaceWorkspaceWrite) {
            return [['Content-Type' => ['application/merge-patch+json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/ld+json', 'application/json']];
        }

        return $this->accept;
    }

    /**
     * @return \Gyroscops\Api\Model\WorkspaceJsonldWorkspaceRead|\Gyroscops\Api\Model\WorkspaceWorkspaceRead
     *
     * @throws \Gyroscops\Api\Exception\PatchWorkspaceItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchWorkspaceItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchWorkspaceItemNotFoundException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\WorkspaceJsonldWorkspaceRead', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\WorkspaceWorkspaceRead', 'json');
            }
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PatchWorkspaceItemBadRequestException($response);
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PatchWorkspaceItemUnprocessableEntityException($response);
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PatchWorkspaceItemNotFoundException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
