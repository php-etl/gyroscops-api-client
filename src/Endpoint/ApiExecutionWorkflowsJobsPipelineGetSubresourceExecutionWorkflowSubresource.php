<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class ApiExecutionWorkflowsJobsPipelineGetSubresourceExecutionWorkflowSubresource extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $jobs;

    /**
     * Retrieves a ExecutionWorkflow resource.
     *
     * @param string $id   ExecutionWorkflow identifier
     * @param string $jobs ExecutionWorkflowJob identifier
     */
    public function __construct(string $id, string $jobs)
    {
        $this->id = $id;
        $this->jobs = $jobs;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}', '{jobs}'], [$this->id, $this->jobs], '/runtime/execution/execution-workflow/{id}/job/{job}/pipeline');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @return \Gyroscops\Api\Model\ExecutionPipelineJob|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === (null === $contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ExecutionPipelineJob', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
