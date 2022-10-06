<?php

namespace Gyroscops\Api\Endpoint;

class ScheduleUntilScheduleCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;

    /**
     * Schedule a delayed pipeline execution.
     *
     * @param \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleUntilCommandInputJsonld|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleUntilCommandInput|null $requestBody
     */
    public function __construct($requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/runtime/schedule-until';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleUntilCommandInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleUntilCommandInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleUntilCommandInput) {
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
     * @throws \Gyroscops\Api\Exception\ScheduleUntilScheduleCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ScheduleUntilScheduleCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleUntilCommand|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (202 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ScheduleDeclarePipelineScheduleUntilCommand', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\ScheduleUntilScheduleCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\ScheduleUntilScheduleCollectionUnprocessableEntityException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
