<?php

namespace Gyroscops\Api\Exception;

class PatchUserAuthorizationItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
