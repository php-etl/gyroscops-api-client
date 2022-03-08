<?php

namespace Gyroscops\Api\Endpoint;

class RemovePipelineStepProbePipelineItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $code;
    protected $probe_code;
    protected $probe_label;
    protected $id;
    /**
     * Removes a probe from a step
     *
     * @param string $code Step resource code
     * @param string $probeCode Probe resource code
     * @param string $probeLabel Probe resource code
     * @param string $id Resource identifier
     */
    public function __construct(string $code, string $probeCode, string $probeLabel, string $id)
    {
        $this->code = $code;
        $this->probe_code = $probeCode;
        $this->probe_label = $probeLabel;
        $this->id = $id;
    }
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{code}', '{probe_code}', '{probe_label}', '{id}'), array($this->code, $this->probe_code, $this->probe_label, $this->id), '/runtime/pipeline/{id}/step/{code}/probes/{probeCode}/{probeLabel}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Api\Exception\RemovePipelineStepProbePipelineItemNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\RemovePipelineStepProbePipelineItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}