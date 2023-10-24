<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class PostWorkspaceCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Creates a Workspace resource.
     *
     * @param \Gyroscops\Api\Model\WorkspaceJsonld|\Gyroscops\Api\Model\Workspace|null $requestBody
     * @param array                                                                    $accept      Accept content header application/ld+json|application/json|text/html
     */
    public function __construct($requestBody = null, array $accept = [])
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/authentication/workspaces';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\WorkspaceJsonld) {
            return [['Content-Type' => ['application/ld+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\Workspace) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\Workspace) {
            return [['Content-Type' => ['text/html']], $this->body];
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
     * {@inheritdoc}
     *
     * @return \Gyroscops\Api\Model\WorkspaceJsonld|\Gyroscops\Api\Model\Workspace|null
     *
     * @throws \Gyroscops\Api\Exception\PostWorkspaceCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostWorkspaceCollectionUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            if (mb_strpos($contentType, 'application/ld+json') !== false) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\WorkspaceJsonld', 'json');
            }
            if (mb_strpos($contentType, 'application/json') !== false) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\Workspace', 'json');
            }
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PostWorkspaceCollectionBadRequestException($response);
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PostWorkspaceCollectionUnprocessableEntityException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
