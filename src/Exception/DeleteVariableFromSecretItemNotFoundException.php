<?php

namespace Gyroscops\Api\Exception;

class DeleteVariableFromSecretItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}