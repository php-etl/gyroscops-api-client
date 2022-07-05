<?php

namespace Gyroscops\Api\Endpoint;

class ApiExecutionWorkflowsJobsActionGetSubresourceExecutionWorkflowSubresource extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $jobs;
    /**
     * Retrieves a ExecutionWorkflow resource.
     *
     * @param string $id ExecutionWorkflow identifier
     * @param string $jobs ExecutionWorkflowJob identifier
     */
    public function __construct(string $id, string $jobs)
    {
        $this->id = $id;
        $this->jobs = $jobs;
    }
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{jobs}'), array($this->id, $this->jobs), '/runtime/execution/execution-workflow/{id}/job/{job}/action');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Gyroscops\Api\Model\ExecutionWorkflowJobAction
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\ExecutionWorkflowJobAction', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}