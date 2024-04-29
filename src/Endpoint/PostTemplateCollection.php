<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class PostTemplateCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Creates a Template resource.
     *
     * @param \Gyroscops\Api\Model\TemplateDeclareSatelliteTemplateInputJsonld|\Gyroscops\Api\Model\TemplateDeclareSatelliteTemplateInput|null $requestBody
     * @param array                                                                                                                            $accept      Accept content header application/ld+json|application/json|text/html
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
        return '/runtime/templates';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\TemplateDeclareSatelliteTemplateInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\TemplateDeclareSatelliteTemplateInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\TemplateDeclareSatelliteTemplateInput) {
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
     * @return \Gyroscops\Api\Model\TemplateJsonldTemplateCreate|\Gyroscops\Api\Model\TemplateTemplateCreate
     *
     * @throws \Gyroscops\Api\Exception\PostTemplateCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostTemplateCollectionUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\TemplateJsonldTemplateCreate', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\TemplateTemplateCreate', 'json');
            }
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PostTemplateCollectionBadRequestException($response);
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PostTemplateCollectionUnprocessableEntityException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
