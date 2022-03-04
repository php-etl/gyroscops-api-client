<?php

namespace Gyroscops\Api\Exception;

class PutProjectItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}