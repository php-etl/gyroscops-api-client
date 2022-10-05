<?php

namespace Gyroscops\Api\Exception;

class GetPipelineCompilationItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
