<?php

namespace Gyroscops\Api\Exception;

class ReplacePipelineStepPipelineCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
