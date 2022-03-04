<?php

namespace Gyroscops\Api\Exception;

class ReplacePipelineStepPipelineStepCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}