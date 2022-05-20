<?php

namespace Gyroscops\Api\Exception;

class GetPipelineStepItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}