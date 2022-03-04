<?php

namespace Gyroscops\Api\Exception;

class ResumeExecutionExecutionCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}