<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class RemoveValuesConfigurationItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Remove some configuration values inside an existing configurations storage.
     *
     * @param string                                                                                                                                     $id          Resource identifier
     * @param \Gyroscops\Api\Model\ConfigurationRemoveConfigurationValueInputJsonld|\Gyroscops\Api\Model\ConfigurationRemoveConfigurationValueInput|null $requestBody
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
        return str_replace(['{id}'], [$this->id], '/environment/configuration/{id}/remove');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\ConfigurationRemoveConfigurationValueInputJsonld) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ConfigurationRemoveConfigurationValueInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\ConfigurationRemoveConfigurationValueInput) {
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
     * @return \Gyroscops\Api\Model\Configuration|null
     *
     * @throws \Gyroscops\Api\Exception\RemoveValuesConfigurationItemBadRequestException
     * @throws \Gyroscops\Api\Exception\RemoveValuesConfigurationItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\RemoveValuesConfigurationItemNotFoundException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, \Gyroscops\Api\Model\Configuration::class, 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\RemoveValuesConfigurationItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\RemoveValuesConfigurationItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\RemoveValuesConfigurationItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
