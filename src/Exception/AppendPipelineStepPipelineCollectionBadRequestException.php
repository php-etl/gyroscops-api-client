<?php

namespace Gyroscops\Api\Exception;

class AppendPipelineStepPipelineCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
