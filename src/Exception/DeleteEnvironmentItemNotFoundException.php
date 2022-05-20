<?php

namespace Gyroscops\Api\Exception;

class DeleteEnvironmentItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}