<?php

namespace Gyroscops\Api\Exception;

class AddComposerPipelinePipelineCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
