<?php

namespace Gyroscops\Api\Exception;

class AddBeforePipelineStepPipelineCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}