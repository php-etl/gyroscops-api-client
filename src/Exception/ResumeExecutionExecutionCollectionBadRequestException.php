<?php

namespace Gyroscops\Api\Exception;

class ResumeExecutionExecutionCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
