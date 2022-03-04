<?php

namespace Gyroscops\Api\Endpoint;

class RemovePipelineStepProbePipelineStepProbeCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    /**
     * Removes a probe from a step
     *
     * @param \Gyroscops\Api\Model\PipelineStepProbeRemovePipelineStepProbCommandInputJsonld|\Gyroscops\Api\Model\PipelineStepProbeRemovePipelineStepProbCommandInput $requestBody 
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
        return '/runtime/pipeline/step/probes/remove';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineStepProbeRemovePipelineStepProbCommandInputJsonld) {
            return array(array('Content-Type' => array('application/ld+json')), $this->body);
        }
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineStepProbeRemovePipelineStepProbCommandInput) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Gyroscops\Api\Model\PipelineStepProbeRemovePipelineStepProbCommandInput) {
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
     * @throws \Gyroscops\Api\Exception\RemovePipelineStepProbePipelineStepProbeCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\RemovePipelineStepProbePipelineStepProbeCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\PipelineStepProbeRemovePipelineStepProbeCommand
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (202 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\PipelineStepProbeRemovePipelineStepProbeCommand', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\RemovePipelineStepProbePipelineStepProbeCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\RemovePipelineStepProbePipelineStepProbeCollectionUnprocessableEntityException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}