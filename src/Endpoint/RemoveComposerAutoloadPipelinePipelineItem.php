<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class RemoveComposerAutoloadPipelinePipelineItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $accept;

    /**
     * Removes PSR4 autoload composer from a pipeline.
     *
     * @param string                                                                                                                                                             $id          Resource identifier
     * @param \Gyroscops\Api\Model\PipelineRemovePipelineComposerPSR4AutoloadCommandInputJsonld|\Gyroscops\Api\Model\PipelineRemovePipelineComposerPSR4AutoloadCommandInput|null $requestBody
     * @param array                                                                                                                                                              $accept      Accept content header application/ld+json|application/json|text/html
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
        return str_replace(['{id}'], [$this->id], '/runtime/pipelines/{id}/remove-psr4-autoload');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineRemovePipelineComposerPSR4AutoloadCommandInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineRemovePipelineComposerPSR4AutoloadCommandInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineRemovePipelineComposerPSR4AutoloadCommandInput) {
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
     * @return \Gyroscops\Api\Model\PipelineRemovePipelineComposerPSR4AutoloadCommandJsonldRead|null
     *
     * @throws \Gyroscops\Api\Exception\RemoveComposerAutoloadPipelinePipelineItemBadRequestException
     * @throws \Gyroscops\Api\Exception\RemoveComposerAutoloadPipelinePipelineItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\RemoveComposerAutoloadPipelinePipelineItemNotFoundException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            if (mb_strpos($contentType, 'application/ld+json') !== false) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\PipelineRemovePipelineComposerPSR4AutoloadCommandJsonldRead', 'json');
            }
            if (mb_strpos($contentType, 'application/json') !== false) {
                return json_decode($body);
            }
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\RemoveComposerAutoloadPipelinePipelineItemBadRequestException($response);
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\RemoveComposerAutoloadPipelinePipelineItemUnprocessableEntityException($response);
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\RemoveComposerAutoloadPipelinePipelineItemNotFoundException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
