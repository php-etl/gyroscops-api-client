<?php

namespace Gyroscops\Api\Exception;

class MoveAfterPipelineStepPipelineCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
