<?php

namespace Gyroscops\Api\Exception;

class AddAfterPipelineStepPipelineStepCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}