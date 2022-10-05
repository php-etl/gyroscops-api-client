<?php

namespace Gyroscops\Api\Exception;

class GetExecutionWorkflowJobActionItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
