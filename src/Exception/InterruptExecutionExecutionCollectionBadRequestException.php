<?php

namespace Gyroscops\Api\Exception;

class InterruptExecutionExecutionCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
