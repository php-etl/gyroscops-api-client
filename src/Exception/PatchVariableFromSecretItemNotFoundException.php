<?php

namespace Gyroscops\Api\Exception;

class PatchVariableFromSecretItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}