<?php

namespace Gyroscops\Api\Exception;

class GetUserAuthorizationItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}