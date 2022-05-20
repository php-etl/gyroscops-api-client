<?php

namespace Gyroscops\Api\Exception;

class PutVariableFromConfigMapItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}