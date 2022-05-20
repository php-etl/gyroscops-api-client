<?php

namespace Gyroscops\Api\Exception;

class PutVariableFromConfigMapItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}