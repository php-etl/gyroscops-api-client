<?php

namespace Gyroscops\Api\Exception;

class AppendPipelineStepPipelineStepCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}