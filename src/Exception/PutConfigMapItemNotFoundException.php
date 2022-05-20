<?php

namespace Gyroscops\Api\Exception;

class PutConfigMapItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}