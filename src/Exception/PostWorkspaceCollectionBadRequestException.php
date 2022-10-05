<?php

namespace Gyroscops\Api\Exception;

class PostWorkspaceCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
