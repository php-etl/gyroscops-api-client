<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class GetPipelineCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;

    /**
     * Retrieves the collection of Pipeline resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     *     @var string $code
     *     @var array $code[]
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
        return '/runtime/pipelines';
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
        $optionsResolver->setDefined(['page', 'code', 'code[]']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1]);
        $optionsResolver->setAllowedTypes('page', ['int']);
        $optionsResolver->setAllowedTypes('code', ['string']);
        $optionsResolver->setAllowedTypes('code[]', ['array']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Gyroscops\Api\Model\PipelineRead[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\PipelineRead[]', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
