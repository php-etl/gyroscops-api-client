<?php

namespace Gyroscops\Api\Exception;

class PatchEnvironmentItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}