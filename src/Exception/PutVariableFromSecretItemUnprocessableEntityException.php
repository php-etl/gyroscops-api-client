<?php

namespace Gyroscops\Api\Exception;

class PutVariableFromSecretItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}