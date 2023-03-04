<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class AddComposerRepositoryPipelinePipelineItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Adds a composer repository to a pipeline.
     *
     * @param string                                                                                                                                                   $id          Resource identifier
     * @param \Gyroscops\Api\Model\PipelineAddPipelineComposerRepositoryCommandInputJsonld|\Gyroscops\Api\Model\PipelineAddPipelineComposerRepositoryCommandInput|null $requestBody
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
        return str_replace(['{id}'], [$this->id], '/runtime/pipeline/{id}/add-composer-repository');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineAddPipelineComposerRepositoryCommandInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineAddPipelineComposerRepositoryCommandInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineAddPipelineComposerRepositoryCommandInput) {
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
     * @return null
     *
     * @throws \Gyroscops\Api\Exception\AddComposerRepositoryPipelinePipelineItemBadRequestException
     * @throws \Gyroscops\Api\Exception\AddComposerRepositoryPipelinePipelineItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\AddComposerRepositoryPipelinePipelineItemNotFoundException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (202 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body, null, 512, JSON_THROW_ON_ERROR);
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\AddComposerRepositoryPipelinePipelineItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\AddComposerRepositoryPipelinePipelineItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\AddComposerRepositoryPipelinePipelineItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
