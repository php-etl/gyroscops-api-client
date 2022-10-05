<?php

namespace Gyroscops\Api\Exception;

class GetAkeneoInstanceItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
