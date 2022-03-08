<?php

namespace Gyroscops\Api\Exception;

class PostForgotPasswordTokenBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Missing password parameter');
    }
}