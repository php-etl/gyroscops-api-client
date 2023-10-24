<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class RemovePipelineStepProbePipelineItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $code;
    protected $probe_code;
    protected $id;

    /**
     * Removes a probe from a step.
     *
     * @param string $code      Step resource code
     * @param string $probeCode Probe resource code
     * @param string $id        Resource identifier
     */
    public function __construct(string $code, string $probeCode, string $id)
    {
        $this->code = $code;
        $this->probe_code = $probeCode;
        $this->id = $id;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{code}', '{probe_code}', '{id}'], [$this->code, $this->probe_code, $this->id], '/runtime/pipelines/{id}/steps/{code}/probes/{probeCode}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    /**
     * {@inheritdoc}
     *
     * @return null
     *
     * @throws \Gyroscops\Api\Exception\RemovePipelineStepProbePipelineItemNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\RemovePipelineStepProbePipelineItemNotFoundException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
