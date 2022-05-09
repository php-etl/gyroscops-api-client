<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class ApiProjectsAuthorizationsGetSubresourceProjectSubresource extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Retrieves a Project resource.
     *
     * @param string $id              Project identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     */
    public function __construct(string $id, array $queryParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/authentication/projects/{id}/authorizations');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1]);
        $optionsResolver->setAllowedTypes('page', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Gyroscops\Api\Model\UserAuthorization[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\UserAuthorization[]', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
