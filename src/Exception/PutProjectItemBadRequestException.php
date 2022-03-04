<?php

namespace Gyroscops\Api\Exception;

class PutProjectItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}