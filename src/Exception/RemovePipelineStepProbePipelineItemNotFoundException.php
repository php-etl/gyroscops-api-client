<?php

namespace Gyroscops\Api\Exception;

class RemovePipelineStepProbePipelineItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}