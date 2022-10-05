<?php

namespace Gyroscops\Api\Exception;

class FinishExecutionExecutionCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
