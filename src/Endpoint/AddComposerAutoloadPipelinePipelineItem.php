<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class AddComposerAutoloadPipelinePipelineItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $accept;

    /**
     * Adds PSR4 autoload composer to a pipeline.
     *
     * @param string                                                                                                     $id          Resource identifier
     * @param \Gyroscops\Api\Model\PipelineAddPipelineComposerPSR4AutoloadCommandInputJsonldPipelineWrite|\stdClass|null $requestBody
     * @param array                                                                                                      $accept      Accept content header application/ld+json|application/json|text/html
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
        return str_replace(['{id}'], [$this->id], '/runtime/pipelines/{id}/add-psr4-autoload');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineAddPipelineComposerPSR4AutoloadCommandInputJsonldPipelineWrite) {
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
     * @return \Gyroscops\Api\Model\PipelineAddPipelineComposerPSR4AutoloadCommandJsonldPipelineReadPipelineSubresourceRead|null
     *
     * @throws \Gyroscops\Api\Exception\AddComposerAutoloadPipelinePipelineItemBadRequestException
     * @throws \Gyroscops\Api\Exception\AddComposerAutoloadPipelinePipelineItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\AddComposerAutoloadPipelinePipelineItemNotFoundException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\PipelineAddPipelineComposerPSR4AutoloadCommandJsonldPipelineReadPipelineSubresourceRead', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return json_decode($body);
            }
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\AddComposerAutoloadPipelinePipelineItemBadRequestException($response);
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\AddComposerAutoloadPipelinePipelineItemUnprocessableEntityException($response);
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\AddComposerAutoloadPipelinePipelineItemNotFoundException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
