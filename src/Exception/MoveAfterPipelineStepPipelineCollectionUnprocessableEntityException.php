<?php

namespace Gyroscops\Api\Exception;

class MoveAfterPipelineStepPipelineCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
