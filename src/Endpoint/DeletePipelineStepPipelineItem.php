<?php

namespace Gyroscops\Api\Endpoint;

class DeletePipelineStepPipelineItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $code;
    protected $id;
    /**
     * Removes a step from a pipeline
     *
     * @param string $code Step resource code
     * @param string $id Resource identifier
     */
    public function __construct(string $code, string $id)
    {
        $this->code = $code;
        $this->id = $id;
    }
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{code}', '{id}'), array($this->code, $this->id), '/runtime/pipelines/{id}/steps/{code}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Api\Exception\DeletePipelineStepPipelineItemNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\DeletePipelineStepPipelineItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}