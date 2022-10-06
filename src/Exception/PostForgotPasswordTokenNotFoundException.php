<?php

declare(strict_types=1);

namespace Gyroscops\Api\Exception;

class PostForgotPasswordTokenNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Token not found');
    }
}
