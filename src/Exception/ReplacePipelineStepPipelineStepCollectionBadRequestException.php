<?php

namespace Gyroscops\Api\Exception;

class ReplacePipelineStepPipelineStepCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}