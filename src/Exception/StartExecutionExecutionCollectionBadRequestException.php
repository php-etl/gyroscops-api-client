<?php

namespace Gyroscops\Api\Exception;

class StartExecutionExecutionCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}