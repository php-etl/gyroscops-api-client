<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class SoftDeleteWorkflowItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $accept;

    /**
     * Replaces the Workflow resource.
     *
     * @param string                                                                       $id          Resource identifier
     * @param \Gyroscops\Api\Model\WorkflowRemoveWorkflowCommandInputJsonld|\stdClass|null $requestBody
     * @param array                                                                        $accept      Accept content header application/ld+json|application/json|text/html
     */
    public function __construct(string $id, $requestBody = null, array $accept = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/runtime/workflows/{id}/delete');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\WorkflowRemoveWorkflowCommandInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \stdClass) {
            return [['Content-Type' => ['application/json']], json_encode($this->body)];
        }
        if ($this->body instanceof \stdClass) {
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
     * {@inheritdoc}
     *
     * @return \Gyroscops\Api\Model\WorkflowRemoveWorkflowCommandJsonldRead|null
     *
     * @throws \Gyroscops\Api\Exception\SoftDeleteWorkflowItemBadRequestException
     * @throws \Gyroscops\Api\Exception\SoftDeleteWorkflowItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\SoftDeleteWorkflowItemNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            if (mb_strpos($contentType, 'application/ld+json') !== false) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\WorkflowRemoveWorkflowCommandJsonldRead', 'json');
            }
            if (mb_strpos($contentType, 'application/json') !== false) {
                return json_decode($body);
            }
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\SoftDeleteWorkflowItemBadRequestException($response);
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\SoftDeleteWorkflowItemUnprocessableEntityException($response);
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\SoftDeleteWorkflowItemNotFoundException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}