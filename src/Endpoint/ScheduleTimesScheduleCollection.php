<?php

namespace Gyroscops\Api\Endpoint;

class ScheduleTimesScheduleCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;

    /**
     * Schedule a recurring pipeline execution.
     *
     * @param \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommandInputJsonld|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommandInput|null $requestBody
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
        return '/runtime/schedule-times';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommandInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommandInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommandInput) {
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
     * @throws \Gyroscops\Api\Exception\ScheduleTimesScheduleCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ScheduleTimesScheduleCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommand|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (202 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ScheduleDeclarePipelineScheduleTimesCommand', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\ScheduleTimesScheduleCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\ScheduleTimesScheduleCollectionUnprocessableEntityException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
