<?php

namespace Gyroscops\Api\Exception;

class AddPipelineStepProbePipelineCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
