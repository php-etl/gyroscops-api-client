<?php

namespace Gyroscops\Api\Exception;

class GetEnvironmentItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}