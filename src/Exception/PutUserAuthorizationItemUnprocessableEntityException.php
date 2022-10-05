<?php

namespace Gyroscops\Api\Exception;

class PutUserAuthorizationItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
