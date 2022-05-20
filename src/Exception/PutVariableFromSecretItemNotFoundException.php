<?php

namespace Gyroscops\Api\Exception;

class PutVariableFromSecretItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}