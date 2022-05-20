<?php

namespace Gyroscops\Api\Exception;

class DeletePipelinePipelineItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}