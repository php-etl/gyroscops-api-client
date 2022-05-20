<?php

namespace Gyroscops\Api\Exception;

class GetExecutionPipelineJobItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}