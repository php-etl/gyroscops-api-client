<?php

namespace Gyroscops\Api\Exception;

class TerminateExecutionExecutionCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
