<?php

namespace Gyroscops\Api\Exception;

class DeleteVariableFromConfigMapItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}