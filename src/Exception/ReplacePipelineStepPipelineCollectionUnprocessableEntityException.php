<?php

namespace Gyroscops\Api\Exception;

class ReplacePipelineStepPipelineCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}