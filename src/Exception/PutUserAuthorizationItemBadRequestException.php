<?php

namespace Gyroscops\Api\Exception;

class PutUserAuthorizationItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}