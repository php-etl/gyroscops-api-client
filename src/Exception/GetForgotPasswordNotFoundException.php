<?php

namespace Gyroscops\Api\Exception;

class GetForgotPasswordNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Token not found or expired');
    }
}