<?php

namespace Gyroscops\Api\Exception;

class GetWorkflowJobItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
