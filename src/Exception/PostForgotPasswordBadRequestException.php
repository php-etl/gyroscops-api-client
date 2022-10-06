<?php

declare(strict_types=1);

namespace Gyroscops\Api\Exception;

class PostForgotPasswordBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Missing email parameter or invalid format');
    }
}
