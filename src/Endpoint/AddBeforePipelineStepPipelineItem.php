<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class AddBeforePipelineStepPipelineItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Adds a step before another one in a pipeline.
     *
     * @param string                                                                                                                                   $id          Resource identifier
     * @param \Gyroscops\Api\Model\PipelineAddBeforePipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineAddBeforePipelineStepCommandInput|null $requestBody
     */
    public function __construct(string $id, $requestBody = null)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/runtime/pipeline/{id}/step/{code}/add-before');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineAddBeforePipelineStepCommandInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineAddBeforePipelineStepCommandInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineAddBeforePipelineStepCommandInput) {
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
     * @throws \Gyroscops\Api\Exception\AddBeforePipelineStepPipelineItemBadRequestException
     * @throws \Gyroscops\Api\Exception\AddBeforePipelineStepPipelineItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\AddBeforePipelineStepPipelineItemNotFoundException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (202 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return json_decode($body, null, 512, \JSON_THROW_ON_ERROR);
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\AddBeforePipelineStepPipelineItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\AddBeforePipelineStepPipelineItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\AddBeforePipelineStepPipelineItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
