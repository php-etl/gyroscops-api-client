<?php

declare(strict_types=1);

namespace Gyroscops\Api\Endpoint;

class EditVariableFromConstantItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $accept;

    /**
     * Replaces the VariableFromConstant resource.
     *
     * @param string                                                                                                                     $id          Resource identifier
     * @param \Gyroscops\Api\Model\VariableFromConstantJsonldVariableUpdate|\Gyroscops\Api\Model\VariableFromConstantVariableUpdate|null $requestBody
     * @param array                                                                                                                      $accept      Accept content header application/ld+json|application/json|text/html
     */
    public function __construct(string $id, $requestBody = null, array $accept = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/environment/variables-from-constant/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\VariableFromConstantJsonldVariableUpdate) {
            return [['Content-Type' => ['application/ld+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\VariableFromConstantVariableUpdate) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\VariableFromConstantVariableUpdate) {
            return [['Content-Type' => ['text/html']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/ld+json', 'application/json']];
        }

        return $this->accept;
    }

    /**
     * @return \Gyroscops\Api\Model\VariableFromConstantJsonldVariableViewEnvironmentView|\Gyroscops\Api\Model\VariableFromConstantVariableViewEnvironmentView
     *
     * @throws \Gyroscops\Api\Exception\EditVariableFromConstantItemBadRequestException
     * @throws \Gyroscops\Api\Exception\EditVariableFromConstantItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\EditVariableFromConstantItemNotFoundException
     * @throws \Gyroscops\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos($contentType, 'application/ld+json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\VariableFromConstantJsonldVariableViewEnvironmentView', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/json')) {
                return $serializer->deserialize($body, 'Gyroscops\\Api\\Model\\VariableFromConstantVariableViewEnvironmentView', 'json');
            }
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\EditVariableFromConstantItemBadRequestException($response);
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\EditVariableFromConstantItemUnprocessableEntityException($response);
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\EditVariableFromConstantItemNotFoundException($response);
        }
        throw new \Gyroscops\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['JWT'];
    }
}
