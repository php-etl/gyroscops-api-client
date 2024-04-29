<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class AddBeforePipelineStepWorkflowJobItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $code;
    protected $id;
    protected $accept;

    /**
     * Adds a step before another one in a pipeline.
     *
     * @param string                                                                                                                                                         $code        Step resource code
     * @param string                                                                                                                                                         $id          Resource identifier
     * @param \Gyroscops\Api\Model\WorkflowJobAddBeforeWorkflowPipelineStepCommandInputJsonld|\Gyroscops\Api\Model\WorkflowJobAddBeforeWorkflowPipelineStepCommandInput|null $requestBody
     * @param array                                                                                                                                                          $accept      Accept content header application/ld+json|application/json|text/html
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
        return str_replace(['{code}', '{id}'], [$this->code, $this->id], '/runtime/workflows/jobs/{id}/pipelines/steps/{code}/add-before');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\WorkflowJobAddBeforeWorkflowPipelineStepCommandInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\WorkflowJobAddBeforeWorkflowPipelineStepCommandInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\WorkflowJobAddBeforeWorkflowPipelineStepCommandInput) {
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
     * @return \Gyroscops\Api\Model\WorkflowJobAddBeforeWorkflowPipelineStepCommandJsonldJobRead|null
     *
     * @throws \Gyroscops\Api\Exception\AddBeforePipelineStepWorkflowJobItemBadRequestException
     * @throws \Gyroscops\Api\Exception\AddBeforePipelineStepWorkflowJobItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\AddBeforePipelineStepWorkflowJobItemNotFoundException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\WorkflowJobAddBeforeWorkflowPipelineStepCommandJsonldJobRead', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return json_decode($body);
            }
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\AddBeforePipelineStepWorkflowJobItemBadRequestException($response);
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\AddBeforePipelineStepWorkflowJobItemUnprocessableEntityException($response);
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\AddBeforePipelineStepWorkflowJobItemNotFoundException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
