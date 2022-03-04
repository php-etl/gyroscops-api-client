<?php

namespace Gyroscops\Api\Exception;

class AddPipelineStepProbePipelineStepProbeCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}