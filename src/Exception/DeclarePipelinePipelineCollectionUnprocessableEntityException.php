<?php

namespace Gyroscops\Api\Exception;

class DeclarePipelinePipelineCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
