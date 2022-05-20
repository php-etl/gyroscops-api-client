<?php

namespace Gyroscops\Api\Exception;

class MoveBeforePipelineStepPipelineCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}