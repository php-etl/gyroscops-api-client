<?php

namespace Gyroscops\Api\Exception;

class InterruptExecutionExecutionCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}