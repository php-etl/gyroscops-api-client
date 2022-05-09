<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class PutProjectItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Replaces the Project resource.
     *
     * @param string                                                          $id          Resource identifier
     * @param \Gyroscops\Api\Model\ProjectJsonld|\Gyroscops\Api\Model\Project $requestBody
     */
    public function __construct(string $id, $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/authentication/projects/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\ProjectJsonld) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\Project) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\Project) {
            return [['Content-Type' => ['text/html']], $this->body];
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
     * @throws \Gyroscops\Api\Exception\PutProjectItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PutProjectItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PutProjectItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\Project|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\Project', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PutProjectItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PutProjectItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PutProjectItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
