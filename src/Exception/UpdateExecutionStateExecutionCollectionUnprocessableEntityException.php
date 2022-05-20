<?php

namespace Gyroscops\Api\Exception;

class UpdateExecutionStateExecutionCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}