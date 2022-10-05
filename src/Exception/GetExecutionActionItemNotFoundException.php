<?php

namespace Gyroscops\Api\Exception;

class GetExecutionActionItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
