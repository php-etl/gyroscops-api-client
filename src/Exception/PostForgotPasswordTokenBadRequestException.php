<?php

declare(strict_types=1);

namespace Gyroscops\Api\Exception;

class PostForgotPasswordTokenBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Missing password parameter');
    }
}
