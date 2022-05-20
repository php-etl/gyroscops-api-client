<?php

namespace Gyroscops\Api\Exception;

class PatchVariableFromConfigMapItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}