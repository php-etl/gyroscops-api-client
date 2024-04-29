<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class ReorderPipelineStepsWorkflowJobItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $accept;

    /**
     * Reorganizes the steps of a pipeline according to a given order.
     *
     * @param string                                                                                                                                                       $id          Resource identifier
     * @param \Gyroscops\Api\Model\WorkflowJobReorderWorkflowPipelineStepsCommandInputJsonld|\Gyroscops\Api\Model\WorkflowJobReorderWorkflowPipelineStepsCommandInput|null $requestBody
     * @param array                                                                                                                                                        $accept      Accept content header application/ld+json|application/json|text/html
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
        return str_replace(['{id}'], [$this->id], '/runtime/workflows/jobs/{id}/pipelines/steps/reorder');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\WorkflowJobReorderWorkflowPipelineStepsCommandInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\WorkflowJobReorderWorkflowPipelineStepsCommandInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\WorkflowJobReorderWorkflowPipelineStepsCommandInput) {
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
     * @return \Gyroscops\Api\Model\WorkflowJobReorderWorkflowPipelineStepsCommandJsonldJobRead|null
     *
     * @throws \Gyroscops\Api\Exception\ReorderPipelineStepsWorkflowJobItemBadRequestException
     * @throws \Gyroscops\Api\Exception\ReorderPipelineStepsWorkflowJobItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\ReorderPipelineStepsWorkflowJobItemNotFoundException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\WorkflowJobReorderWorkflowPipelineStepsCommandJsonldJobRead', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return json_decode($body);
            }
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\ReorderPipelineStepsWorkflowJobItemBadRequestException($response);
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\ReorderPipelineStepsWorkflowJobItemUnprocessableEntityException($response);
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\ReorderPipelineStepsWorkflowJobItemNotFoundException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
