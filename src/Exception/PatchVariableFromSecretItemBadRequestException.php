<?php

namespace Gyroscops\Api\Exception;

class PatchVariableFromSecretItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}