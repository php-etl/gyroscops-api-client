<?php

namespace Gyroscops\Api\Exception;

class ReorderPipelineStepsPipelineCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}