<?php

namespace Gyroscops\Api\Endpoint;

class ApiExecutionWorkflowJobsPipelineStepsGetSubresourceExecutionWorkflowJobSubresource extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $pipeline;
    /**
     * Retrieves a ExecutionWorkflowJob resource.
     *
     * @param string $id ExecutionWorkflowJob identifier
     * @param string $pipeline ExecutionPipelineJob identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     */
    public function __construct(string $id, string $pipeline, array $queryParameters = array())
    {
        $this->id = $id;
        $this->pipeline = $pipeline;
        $this->queryParameters = $queryParameters;
    }
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{pipeline}'), array($this->id, $this->pipeline), '/runtime/execution/workflow/execution-workflow-job/{id}/pipeline/steps');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1));
        $optionsResolver->setAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Gyroscops\Api\Model\ExecutionPipelineStep[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ExecutionPipelineStep[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}