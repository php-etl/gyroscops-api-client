<?php

namespace Gyroscops\Api\Exception;

class PostConfigMapCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}