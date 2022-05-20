<?php

namespace Gyroscops\Api\Endpoint;

class ScheduleOnceScheduleCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    /**
     * Schedule an immediate pipeline execution
     *
     * @param \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleOnceCommandInputJsonld|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleOnceCommandInput $requestBody 
     */
    public function __construct($requestBody)
    {
        $this->body = $requestBody;
    }
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/runtime/schedule-once';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleOnceCommandInputJsonld) {
            return array(array('Content-Type' => array('application/ld+json')), $this->body);
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleOnceCommandInput) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleOnceCommandInput) {
            return array(array('Content-Type' => array('text/html')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Api\Exception\ScheduleOnceScheduleCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ScheduleOnceScheduleCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleOnceCommand
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (202 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ScheduleDeclarePipelineScheduleOnceCommand', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\ScheduleOnceScheduleCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\ScheduleOnceScheduleCollectionUnprocessableEntityException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}