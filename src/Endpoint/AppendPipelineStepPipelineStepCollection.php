<?php

namespace Gyroscops\Api\Endpoint;

class AppendPipelineStepPipelineStepCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    /**
     * Appends a step to a pipeline
     *
     * @param \Gyroscops\Api\Model\PipelineStepAppendPipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineStepAppendPipelineStepCommandInput $requestBody 
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
        return '/runtime/pipelines/steps/append';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineStepAppendPipelineStepCommandInputJsonld) {
            return array(array('Content-Type' => array('application/ld+json')), $this->body);
        }
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineStepAppendPipelineStepCommandInput) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineStepAppendPipelineStepCommandInput) {
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
     * @throws \Gyroscops\Api\Exception\AppendPipelineStepPipelineStepCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\AppendPipelineStepPipelineStepCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\PipelineStepAppendPipelineStepCommand
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (202 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\PipelineStepAppendPipelineStepCommand', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\AppendPipelineStepPipelineStepCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\AppendPipelineStepPipelineStepCollectionUnprocessableEntityException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}