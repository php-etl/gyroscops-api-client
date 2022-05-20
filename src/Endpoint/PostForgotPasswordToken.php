<?php

namespace Gyroscops\Api\Endpoint;

class PostForgotPasswordToken extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    protected $token;
    /**
     * 
     *
     * @param string $token 
     * @param null|\stdClass $requestBody 
     */
    public function __construct(string $token, ?\stdClass $requestBody = null)
    {
        $this->token = $token;
        $this->body = $requestBody;
    }
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{token}'), array($this->token), '/forgot_password/{token}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \stdClass) {
            return array(array('Content-Type' => array('application/json')), json_encode($this->body));
        }
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Api\Exception\PostForgotPasswordTokenBadRequestException
     * @throws \Gyroscops\Api\Exception\PostForgotPasswordTokenNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PostForgotPasswordTokenBadRequestException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\PostForgotPasswordTokenNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}