<?php

namespace Gyroscops\Api\Exception;

class GetVariableFromConfigMapItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
