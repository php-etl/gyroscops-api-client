<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class GetExecutionRejectsExecutionPipelineItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $stepCode;
    protected $id;
    protected $accept;

    /**
     * Get rejects from a selected step.
     *
     * @param string $stepCode Step resource code
     * @param string $id       Resource identifier
     * @param array  $accept   Accept content header application/ld+json|application/json|text/html
     */
    public function __construct(string $stepCode, string $id, array $accept = [])
    {
        $this->stepCode = $stepCode;
        $this->id = $id;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{stepCode}', '{id}'], [$this->stepCode, $this->id], '/runtime/executions/runtime/executions/pipelines/{id}/steps/{stepCode}/rejects');
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
     * @return \Gyroscops\Api\Model\ExecutionPipelineJsonldExecutionPipelineRead|\Gyroscops\Api\Model\ExecutionPipelineExecutionPipelineRead
     *
     * @throws \Gyroscops\Api\Exception\GetExecutionRejectsExecutionPipelineItemNotFoundException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ExecutionPipelineJsonldExecutionPipelineRead', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ExecutionPipelineExecutionPipelineRead', 'json');
            }
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\GetExecutionRejectsExecutionPipelineItemNotFoundException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
