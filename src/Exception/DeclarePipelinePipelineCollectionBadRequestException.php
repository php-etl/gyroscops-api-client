<?php

namespace Gyroscops\Api\Exception;

class DeclarePipelinePipelineCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}