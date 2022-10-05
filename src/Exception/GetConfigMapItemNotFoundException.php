<?php

namespace Gyroscops\Api\Exception;

class GetConfigMapItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
