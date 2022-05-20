<?php

namespace Gyroscops\Api\Exception;

class GetVariableFromSecretItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}