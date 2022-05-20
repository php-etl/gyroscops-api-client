<?php

namespace Gyroscops\Api\Exception;

class PatchEnvironmentItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}