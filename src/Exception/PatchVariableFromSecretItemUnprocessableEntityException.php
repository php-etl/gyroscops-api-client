<?php

namespace Gyroscops\Api\Exception;

class PatchVariableFromSecretItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}