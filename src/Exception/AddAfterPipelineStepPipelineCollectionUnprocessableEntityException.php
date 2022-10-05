<?php

namespace Gyroscops\Api\Exception;

class AddAfterPipelineStepPipelineCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
