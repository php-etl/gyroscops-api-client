<?php

namespace Gyroscops\Api\Exception;

class PutEnvironmentItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}