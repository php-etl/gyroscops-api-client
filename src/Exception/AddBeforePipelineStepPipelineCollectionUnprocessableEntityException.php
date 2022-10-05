<?php

namespace Gyroscops\Api\Exception;

class AddBeforePipelineStepPipelineCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
