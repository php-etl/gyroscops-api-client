<?php

namespace Gyroscops\Api\Exception;

class PutUserAuthorizationItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
