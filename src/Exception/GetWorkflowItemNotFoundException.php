<?php

namespace Gyroscops\Api\Exception;

class GetWorkflowItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}