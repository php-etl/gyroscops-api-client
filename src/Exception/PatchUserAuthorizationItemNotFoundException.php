<?php

namespace Gyroscops\Api\Exception;

class PatchUserAuthorizationItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}