<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class GetPipelineStepWorkflowJobItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $code;
    protected $id;
    protected $accept;

    /**
     * Get a step from a pipeline.
     *
     * @param string $code   Step resource code
     * @param string $id     Resource identifier
     * @param array  $accept Accept content header application/ld+json|application/json|text/html
     */
    public function __construct(string $code, string $id, array $accept = [])
    {
        $this->code = $code;
        $this->id = $id;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{code}', '{id}'], [$this->code, $this->id], '/runtime/workflows/jobs/{id}/pipelines/steps/{code}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
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
     * @return \Gyroscops\Api\Model\WorkflowJobJsonldJobRead|\Gyroscops\Api\Model\WorkflowJobJobRead
     *
     * @throws \Gyroscops\Api\Exception\GetPipelineStepWorkflowJobItemNotFoundException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\WorkflowJobJsonldJobRead', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\WorkflowJobJobRead', 'json');
            }
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\GetPipelineStepWorkflowJobItemNotFoundException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
