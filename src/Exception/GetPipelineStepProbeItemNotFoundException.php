<?php

namespace Gyroscops\Api\Exception;

class GetPipelineStepProbeItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}