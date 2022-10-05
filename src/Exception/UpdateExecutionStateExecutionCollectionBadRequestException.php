<?php

namespace Gyroscops\Api\Exception;

class UpdateExecutionStateExecutionCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
