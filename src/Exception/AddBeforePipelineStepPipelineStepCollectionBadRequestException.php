<?php

namespace Gyroscops\Api\Exception;

class AddBeforePipelineStepPipelineStepCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}