<?php

namespace Gyroscops\Api\Exception;

class AddPipelineStepProbePipelineStepProbeCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}