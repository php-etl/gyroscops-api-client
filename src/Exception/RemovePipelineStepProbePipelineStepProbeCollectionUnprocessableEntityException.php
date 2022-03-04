<?php

namespace Gyroscops\Api\Exception;

class RemovePipelineStepProbePipelineStepProbeCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}