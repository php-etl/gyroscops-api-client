<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class PostAkeneoLinkedAccountCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Creates a AkeneoLinkedAccount resource.
     *
     * @param \Gyroscops\Api\Model\AkeneoLinkedAccountAkeneoLinkedAccountsInputJsonld|\Gyroscops\Api\Model\AkeneoLinkedAccountAkeneoLinkedAccountsInput|null $requestBody
     * @param array                                                                                                                                          $accept      Accept content header application/ld+json|application/json|text/html
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
        return '/gateway/akeneo/linked-accounts';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\AkeneoLinkedAccountAkeneoLinkedAccountsInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\AkeneoLinkedAccountAkeneoLinkedAccountsInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\AkeneoLinkedAccountAkeneoLinkedAccountsInput) {
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
     * @return \Gyroscops\Api\Model\AkeneoLinkedAccountJsonld|\Gyroscops\Api\Model\AkeneoLinkedAccount
     *
     * @throws \Gyroscops\Api\Exception\PostAkeneoLinkedAccountCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostAkeneoLinkedAccountCollectionUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\AkeneoLinkedAccountJsonld', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\AkeneoLinkedAccount', 'json');
            }
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PostAkeneoLinkedAccountCollectionBadRequestException($response);
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PostAkeneoLinkedAccountCollectionUnprocessableEntityException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
