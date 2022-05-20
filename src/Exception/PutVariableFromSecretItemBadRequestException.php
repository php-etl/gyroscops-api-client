<?php

namespace Gyroscops\Api\Exception;

class PutVariableFromSecretItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}