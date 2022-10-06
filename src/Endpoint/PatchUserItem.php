<?php

namespace Gyroscops\Api\Endpoint;

class PatchUserItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Updates the User resource.
     *
     * @param string $id Resource identifier
     */
    public function __construct(string $id, ?\Gyroscops\Api\Model\User $requestBody = null)
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
        return str_replace(['{id}'], [$this->id], '/authentication/user/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\User) {
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
     * @throws \Gyroscops\Api\Exception\PatchUserItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchUserItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchUserItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\User|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\User', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PatchUserItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PatchUserItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PatchUserItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
