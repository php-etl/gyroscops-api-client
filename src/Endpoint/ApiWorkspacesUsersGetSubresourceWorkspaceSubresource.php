<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class ApiWorkspacesUsersGetSubresourceWorkspaceSubresource extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $accept;

    /**
     * Retrieves a Workspace resource.
     *
     * @param string $id              Workspace identifier
     * @param array  $queryParameters {
     *
     * @var int    $page The collection page number
     * @var string $organization
     * @var array  $organization[]
     *             }
     *
     * @param array $accept Accept content header application/ld+json|application/json|text/html
     */
    public function __construct(string $id, array $queryParameters = [], array $accept = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/authentication/workspaces/{id}/users');
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
        $optionsResolver->setDefined(['page', 'organization']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('organization', ['string']);
        $optionsResolver->addAllowedTypes('organization', ['array']);

        return $optionsResolver;
    }

    /**
     * @return \Gyroscops\Api\Model\AuthenticationWorkspacesIdUsersGetLdjsonResponse200|\Gyroscops\Api\Model\UserUserRead[]
     *
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\AuthenticationWorkspacesIdUsersGetLdjsonResponse200', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\UserUserRead[]', 'json');
            }
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
