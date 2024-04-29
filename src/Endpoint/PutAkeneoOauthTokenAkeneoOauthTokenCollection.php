<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class PutAkeneoOauthTokenAkeneoOauthTokenCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Generate an Akeneo OAuth token.
     *
     * @param \Gyroscops\Api\Model\GatewayAkeneoOauthTokenPutBody|\Gyroscops\Api\Model\AkeneoOauthTokenOauthTokenInput[]|null $requestBody
     * @param array                                                                                                           $accept      Accept content header application/ld+json|application/json|text/html
     */
    public function __construct($requestBody = null, array $accept = [])
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return '/gateway/akeneo/oauth/token';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\GatewayAkeneoOauthTokenPutBody) {
            return [['Content-Type' => ['application/ld+json']], $serializer->serialize($this->body, 'json')];
        }
        if (\is_array($this->body) && isset($this->body[0]) && $this->body[0] instanceof \Gyroscops\Api\Model\AkeneoOauthTokenOauthTokenInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if (\is_array($this->body) && isset($this->body[0]) && $this->body[0] instanceof \Gyroscops\Api\Model\AkeneoOauthTokenOauthTokenInput) {
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
     * @return \Gyroscops\Api\Model\GatewayAkeneoOauthTokenPutLdjsonResponse200|null
     *
     * @throws \Gyroscops\Api\Exception\PutAkeneoOauthTokenAkeneoOauthTokenCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PutAkeneoOauthTokenAkeneoOauthTokenCollectionUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\GatewayAkeneoOauthTokenPutLdjsonResponse200', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return json_decode($body);
            }
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PutAkeneoOauthTokenAkeneoOauthTokenCollectionBadRequestException($response);
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PutAkeneoOauthTokenAkeneoOauthTokenCollectionUnprocessableEntityException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
