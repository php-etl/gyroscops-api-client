<?php

namespace Gyroscops\Api\Exception;

class PatchUserAuthorizationItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
