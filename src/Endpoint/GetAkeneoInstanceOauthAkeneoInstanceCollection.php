<?php

namespace Gyroscops\Api\Endpoint;

class GetAkeneoInstanceOauthAkeneoInstanceCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;

    /**
     * Check if an organization exists in the database.
     *
     * @param array $queryParameters {
     *
     *     @var string $url
     *     @var int $page The collection page number
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/gateway/akeneo/instance/oauth-state';
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
        $optionsResolver->setDefined(['url', 'page']);
        $optionsResolver->setRequired(['url']);
        $optionsResolver->setDefaults(['page' => 1]);
        $optionsResolver->setAllowedTypes('url', ['string']);
        $optionsResolver->setAllowedTypes('page', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Gyroscops\Api\Model\AkeneoInstance[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\AkeneoInstance[]', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}