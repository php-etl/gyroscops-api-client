<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class PatchProjectItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Updates the Project resource.
     *
     * @param string $id Resource identifier
     */
    public function __construct(string $id, \Gyroscops\Api\Model\Project $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/authentication/projects/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\Project) {
            return [['Content-Type' => ['application/merge-patch+json']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Api\Exception\PatchProjectItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchProjectItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchProjectItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\Project|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\Project', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PatchProjectItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PatchProjectItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PatchProjectItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
