<?php

namespace Gyroscops\Api\Exception;

class GetExecutionPipelineItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}