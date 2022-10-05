<?php

namespace Gyroscops\Api\Exception;

class PipelineCompilationPipelineCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
