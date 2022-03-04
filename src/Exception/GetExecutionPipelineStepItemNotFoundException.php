<?php

namespace Gyroscops\Api\Exception;

class GetExecutionPipelineStepItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}