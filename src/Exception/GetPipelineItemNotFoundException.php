<?php

namespace Gyroscops\Api\Exception;

class GetPipelineItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
