<?php

namespace Gyroscops\Api\Exception;

class DeclareExecutionExecutionCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
