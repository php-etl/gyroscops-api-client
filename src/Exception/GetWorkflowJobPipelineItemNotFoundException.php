<?php

namespace Gyroscops\Api\Exception;

class GetWorkflowJobPipelineItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}