<?php

namespace Gyroscops\Api\Exception;

class RemovePipelineStepProbePipelineStepProbeCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}