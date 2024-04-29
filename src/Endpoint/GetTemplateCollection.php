<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class GetTemplateCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Retrieves the collection of Template resources.
     *
     * @param array $queryParameters {
     *
     * @var int    $page The collection page number
     * @var string $code
     * @var array  $code[]
     * @var string $label
     * @var array  $label[]
     * @var string $description
     * @var array  $description[]
     *             }
     *
     * @param array $accept Accept content header application/ld+json|application/json|text/html
     */
    public function __construct(array $queryParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/runtime/templates';
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['page', 'code', 'label', 'description']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('code', ['string']);
        $optionsResolver->addAllowedTypes('code', ['array']);
        $optionsResolver->addAllowedTypes('label', ['string']);
        $optionsResolver->addAllowedTypes('label', ['array']);
        $optionsResolver->addAllowedTypes('description', ['string']);
        $optionsResolver->addAllowedTypes('description', ['array']);

        return $optionsResolver;
    }

    /**
     * @return \Gyroscops\Api\Model\RuntimeTemplatesGetLdjsonResponse200|\Gyroscops\Api\Model\TemplateTemplateList[]
     *
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\RuntimeTemplatesGetLdjsonResponse200', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\TemplateTemplateList[]', 'json');
            }
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
