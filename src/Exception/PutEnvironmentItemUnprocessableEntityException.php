<?php

namespace Gyroscops\Api\Exception;

class PutEnvironmentItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}