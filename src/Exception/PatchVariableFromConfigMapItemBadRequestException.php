<?php

namespace Gyroscops\Api\Exception;

class PatchVariableFromConfigMapItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}