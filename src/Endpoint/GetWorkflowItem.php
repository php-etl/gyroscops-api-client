<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class GetWorkflowItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $accept;

    /**
     * Retrieves a Workflow resource.
     *
     * @param string $id     Resource identifier
     * @param array  $accept Accept content header application/ld+json|application/json|text/html
     */
    public function __construct(string $id, array $accept = [])
    {
        $this->id = $id;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/runtime/workflows/{id}');
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

    /**
     * @return \Gyroscops\Api\Model\WorkflowJsonldWorkflowRead|\Gyroscops\Api\Model\WorkflowWorkflowRead
     *
     * @throws \Gyroscops\Api\Exception\GetWorkflowItemNotFoundException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\WorkflowJsonldWorkflowRead', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\WorkflowWorkflowRead', 'json');
            }
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\GetWorkflowItemNotFoundException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
