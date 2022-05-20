<?php

namespace Gyroscops\Api\Exception;

class PutEnvironmentItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}