<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class AddAfterPipelineStepWorkflowJobItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $code;
    protected $id;
    protected $accept;

    /**
     * Adds a step after another one in a pipeline.
     *
     * @param string                                                                                                                                                       $code        Step resource code
     * @param string                                                                                                                                                       $id          Resource identifier
     * @param \Gyroscops\Api\Model\WorkflowJobAddAfterWorkflowPipelineStepCommandInputJsonld|\Gyroscops\Api\Model\WorkflowJobAddAfterWorkflowPipelineStepCommandInput|null $requestBody
     * @param array                                                                                                                                                        $accept      Accept content header application/ld+json|application/json|text/html
     */
    public function __construct(string $code, string $id, $requestBody = null, array $accept = [])
    {
        $this->code = $code;
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
        return str_replace(['{code}', '{id}'], [$this->code, $this->id], '/runtime/workflows/jobs/{id}/pipelines/steps/{code}/add-after');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\WorkflowJobAddAfterWorkflowPipelineStepCommandInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\WorkflowJobAddAfterWorkflowPipelineStepCommandInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\WorkflowJobAddAfterWorkflowPipelineStepCommandInput) {
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
     * @return \Gyroscops\Api\Model\WorkflowJobAddAfterWorkflowPipelineStepCommandJsonldJobRead|null
     *
     * @throws \Gyroscops\Api\Exception\AddAfterPipelineStepWorkflowJobItemBadRequestException
     * @throws \Gyroscops\Api\Exception\AddAfterPipelineStepWorkflowJobItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\AddAfterPipelineStepWorkflowJobItemNotFoundException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\WorkflowJobAddAfterWorkflowPipelineStepCommandJsonldJobRead', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return json_decode($body);
            }
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\AddAfterPipelineStepWorkflowJobItemBadRequestException($response);
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\AddAfterPipelineStepWorkflowJobItemUnprocessableEntityException($response);
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\AddAfterPipelineStepWorkflowJobItemNotFoundException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
