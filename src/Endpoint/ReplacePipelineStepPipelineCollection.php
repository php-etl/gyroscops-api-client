<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class ReplacePipelineStepPipelineCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;

    /**
     * Replaces a step by another one in a pipeline.
     *
     * @param \Gyroscops\Api\Model\PipelineReplacePipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineReplacePipelineStepCommandInput $requestBody
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
        return '/runtime/pipelines/steps/replace';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineReplacePipelineStepCommandInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineReplacePipelineStepCommandInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineReplacePipelineStepCommandInput) {
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
     * @throws \Gyroscops\Api\Exception\ReplacePipelineStepPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ReplacePipelineStepPipelineCollectionUnprocessableEntityException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (202 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\ReplacePipelineStepPipelineCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\ReplacePipelineStepPipelineCollectionUnprocessableEntityException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
