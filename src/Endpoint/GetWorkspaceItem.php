<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class GetWorkspaceItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $accept;

    /**
     * Retrieves a Workspace resource.
     *
     * @param string $id     Resource identifier
     * @param array  $accept Accept content header application/ld+json|application/json|text/html
     */
    public function __construct(string $id, array $accept = [])
    {
        $this->id = $id;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/authentication/workspaces/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
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
     * @throws \Gyroscops\Api\Exception\GetWorkspaceItemNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (mb_strpos($contentType, 'application/ld+json') !== false) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\WorkspaceJsonld', 'json');
            }
            if (mb_strpos($contentType, 'application/json') !== false) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\Workspace', 'json');
            }
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\GetWorkspaceItemNotFoundException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
