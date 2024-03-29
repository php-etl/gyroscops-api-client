<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class GetExecutionPipelineRejectsExecutionWorkflowItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $jobCode;
    protected $stepCode;
    protected $id;
    protected $accept;

    /**
     * Get rejects from an executed step.
     *
     * @param string $jobCode  Job resource id
     * @param string $stepCode Step resource id
     * @param string $id       Resource identifier
     * @param array  $accept   Accept content header application/ld+json|application/json|text/html
     */
    public function __construct(string $jobCode, string $stepCode, string $id, array $accept = [])
    {
        $this->jobCode = $jobCode;
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
        return str_replace(['{jobCode}', '{stepCode}', '{id}'], [$this->jobCode, $this->stepCode, $this->id], '/runtime/executions/runtime/executions/workflows/{id}/pipelines/{jobCode}/steps/{stepCode}/rejects');
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
     * {@inheritdoc}
     *
     * @return \Gyroscops\Api\Model\ExecutionWorkflowJsonld|\Gyroscops\Api\Model\ExecutionWorkflow
     *
     * @throws \Gyroscops\Api\Exception\GetExecutionPipelineRejectsExecutionWorkflowItemNotFoundException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            if (mb_strpos($contentType, 'application/ld+json') !== false) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ExecutionWorkflowJsonld', 'json');
            }
            if (mb_strpos($contentType, 'application/json') !== false) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ExecutionWorkflow', 'json');
            }
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\GetExecutionPipelineRejectsExecutionWorkflowItemNotFoundException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
