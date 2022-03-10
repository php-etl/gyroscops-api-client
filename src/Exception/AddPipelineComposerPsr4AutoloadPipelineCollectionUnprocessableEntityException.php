<?php

namespace Gyroscops\Api\Exception;

class AddPipelineComposerPsr4AutoloadPipelineCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}