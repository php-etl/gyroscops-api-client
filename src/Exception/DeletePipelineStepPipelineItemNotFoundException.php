<?php

namespace Gyroscops\Api\Exception;

class DeletePipelineStepPipelineItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}