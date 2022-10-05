<?php

namespace Gyroscops\Api\Exception;

class AddPipelineStepProbePipelineCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
