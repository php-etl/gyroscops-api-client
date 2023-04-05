<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class AddVariablesFromConstantEnvironmentItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Add variables with a constant value.
     *
     * @param string                                                                                                                                               $id          Resource identifier
     * @param \Gyroscops\Api\Model\EnvironmentAddMultipleVariableFromConstantInputJsonld|\Gyroscops\Api\Model\EnvironmentAddMultipleVariableFromConstantInput|null $requestBody
     */
    public function __construct(string $id, $requestBody = null)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/environment/environment/{id}/add-variables-from-constant');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\EnvironmentAddMultipleVariableFromConstantInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\EnvironmentAddMultipleVariableFromConstantInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\EnvironmentAddMultipleVariableFromConstantInput) {
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
     * @return \Gyroscops\Api\Model\EnvironmentRead|null
     *
     * @throws \Gyroscops\Api\Exception\AddVariablesFromConstantEnvironmentItemBadRequestException
     * @throws \Gyroscops\Api\Exception\AddVariablesFromConstantEnvironmentItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\AddVariablesFromConstantEnvironmentItemNotFoundException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, \Gyroscops\Api\Model\EnvironmentRead::class, 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\AddVariablesFromConstantEnvironmentItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\AddVariablesFromConstantEnvironmentItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\AddVariablesFromConstantEnvironmentItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}