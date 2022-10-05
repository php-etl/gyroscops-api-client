<?php

namespace Gyroscops\Api\Exception;

class AppendPipelineStepPipelineCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
