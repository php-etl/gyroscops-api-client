<?php

namespace Gyroscops\Api\Exception;

class PatchVariableFromConfigMapItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}