<?php

namespace Gyroscops\Api\Exception;

class DeclareExecutionExecutionCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}