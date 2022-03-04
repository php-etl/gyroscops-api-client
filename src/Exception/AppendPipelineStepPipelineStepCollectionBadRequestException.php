<?php

namespace Gyroscops\Api\Exception;

class AppendPipelineStepPipelineStepCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}