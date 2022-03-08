<?php

namespace Gyroscops\Api\Exception;

class AddAfterPipelineStepPipelineCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}