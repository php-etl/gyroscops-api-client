<?php

namespace Gyroscops\Api\Exception;

class GetSecretItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}