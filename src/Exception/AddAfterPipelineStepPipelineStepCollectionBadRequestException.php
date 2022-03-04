<?php

namespace Gyroscops\Api\Exception;

class AddAfterPipelineStepPipelineStepCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}