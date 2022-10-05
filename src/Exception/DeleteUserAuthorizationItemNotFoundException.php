<?php

namespace Gyroscops\Api\Exception;

class DeleteUserAuthorizationItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
