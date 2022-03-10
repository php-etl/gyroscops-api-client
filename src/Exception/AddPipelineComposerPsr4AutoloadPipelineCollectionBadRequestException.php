<?php

namespace Gyroscops\Api\Exception;

class AddPipelineComposerPsr4AutoloadPipelineCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}