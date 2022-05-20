<?php

namespace Gyroscops\Api\Exception;

class PostEnvironmentCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}