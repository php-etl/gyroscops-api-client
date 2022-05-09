<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class StartExecutionExecutionCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;

    /**
     * Starts a pipeline execution.
     *
     * @param \Gyroscops\Api\Model\ExecutionStartPipelineExecutionCommandInputJsonld|\Gyroscops\Api\Model\ExecutionStartPipelineExecutionCommandInput $requestBody
     */
    public function __construct($requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/runtime/executions/start';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\ExecutionStartPipelineExecutionCommandInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ExecutionStartPipelineExecutionCommandInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ExecutionStartPipelineExecutionCommandInput) {
            return [['Content-Type' => ['text/html']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Api\Exception\StartExecutionExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\StartExecutionExecutionCollectionUnprocessableEntityException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (202 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\StartExecutionExecutionCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\StartExecutionExecutionCollectionUnprocessableEntityException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
