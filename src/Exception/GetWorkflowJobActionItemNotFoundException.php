<?php

namespace Gyroscops\Api\Exception;

class GetWorkflowJobActionItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
