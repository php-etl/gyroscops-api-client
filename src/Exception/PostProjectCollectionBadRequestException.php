<?php

namespace Gyroscops\Api\Exception;

class PostProjectCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}