<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class ApiSchedulesWorkflowOwnerGetSubresourceScheduleSubresource extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $workflow;

    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id       Schedule identifier
     * @param string $workflow Workflow identifier
     */
    public function __construct(string $id, string $workflow)
    {
        $this->id = $id;
        $this->workflow = $workflow;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}', '{workflow}'], [$this->id, $this->workflow], '/runtime/schedules/{id}/workflow/owner');
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
     * @return \Gyroscops\Api\Model\User|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\User', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
