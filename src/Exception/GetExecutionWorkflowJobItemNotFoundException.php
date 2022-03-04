<?php

namespace Gyroscops\Api\Exception;

class GetExecutionWorkflowJobItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}