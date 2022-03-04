<?php

namespace Gyroscops\Api\Exception;

class AddBeforePipelineStepPipelineStepCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}