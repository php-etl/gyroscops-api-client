<?php

namespace Gyroscops\Api\Exception;

class GetAkeneoOauthTokenItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
