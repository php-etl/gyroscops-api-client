<?php

namespace Gyroscops\Api\Endpoint;

class ScheduleImmediateScheduleCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;

    /**
     * Schedule a pipeline execution immediately.
     *
     * @param \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleImmediateCommandInputJsonld|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleImmediateCommandInput $requestBody
     */
    public function __construct($requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/runtime/schedule-immediate';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleImmediateCommandInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleImmediateCommandInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleImmediateCommandInput) {
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
     * @throws \Gyroscops\Api\Exception\ScheduleImmediateScheduleCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ScheduleImmediateScheduleCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleImmediateCommand|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (202 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ScheduleDeclarePipelineScheduleImmediateCommand', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\ScheduleImmediateScheduleCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\ScheduleImmediateScheduleCollectionUnprocessableEntityException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
